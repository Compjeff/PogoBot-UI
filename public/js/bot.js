
var PokemonBot = function (ip, port, account) {
    this.ip = ip;
    this.port = port;
    this.account = account;

    this.connect = function () {

        this.socket = io('http://' + this.ip + ':' + this.port);
        this.socket.on('connect', function () {
            console.log("bot socketio connected");
        });
        this.socket.on('error', function () {
            console.log("bot socketio has problem");
        });

        this.socket.on('position_update:' + this.account, function (msg) {
            EventDispatcher.dispatchEvent({
                type: "position",
                lat: msg.data["current_position"][0],
                lng: msg.data["current_position"][1]
            });
        });
        
        this.socket.on('pokemon_appeared:' + this.account, function(msg) {
            this.processPokemon(msg.data);
        }.bind(this));
        
        this.socket.on('moving_to_fort:' + this.account, function(msg) {
            this.gotMovingToFortMessage(msg.data);
        }.bind(this));
        
        this.socket.on('moving_to_lured_fort:' + this.account, function(msg) {
            this.gotMovingToFortMessage(msg.data);
        }.bind(this));
        
        this.socket.on("pokemon_caught:" + this.account, function(msg) {
            this.gotPokemonCaughtMessage(msg.data);
        }.bind(this));
        
        this.socket.on('get_player_info:' + this.account, function(msg) {
            this.onBotReply(msg);
        }.bind(this));
    };
 
    this.processPokemon = function(pokemon) {
        EventDispatcher.dispatchEvent({
            type: "pokemon",
            encounter_id: pokemon["encounter_id"],
            pokemon_id: pokemon["pokemon_id"],
            lat: pokemon["latitude"],
            lng: pokemon["longitude"]
        });
    };
    
    this._last_fort_msg = null;
    
    this.gotMovingToFortMessage = function(msg) {
        if ( this._last_fort_msg && (this._last_fort_msg == msg.fort_name) ) {
            return;
        }
        this._last_fort_msg = msg.fort_name;
        showMessage(msg.msg);
    };
    
    this.gotPokemonCaughtMessage = function(msg) {
        showMessage(msg.msg);
    };
    
    this.sendCommand = function(command, args, callback) {
        this._commandCallback = callback;
        var data = {
            account: 'bot',
            name: command
        };
        if ( args ) {
            data["args"] = args;
        }
        this.socket.emit('remote:send_request', data);
    };
    
    this.onBotReply = function(msg) {
        this._commandCallback(msg.result);
    };
    
    this.getPlayerInfo = function(callback) {
        this.sendCommand("get_player_info", null, function(reply) {
            var playerData = reply.player.player_data;
            $.each(reply.inventory.inventory_delta.inventory_items, function() {
                var data = this.inventory_item_data;
                if ( data.player_stats ) {
                    for (var attrName in data.player_stats) {
                        playerData[attrName] = data.player_stats[attrName];
                    }
                    return;
                }
                if ( data.player ) {
                    console.log(data.player);
                }
            });
            var result = {
                player: playerData
            };
            callback(result);
        });
    };
};