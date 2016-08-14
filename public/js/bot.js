
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

        this.socket.on('update_web_cells:' + this.account, function (msg) {
            this.processCells(msg.data['cells']);
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
    };

    this.processCells = function (cells) {
        self = this;
        $.each(cells, function () {
            if ( this.catchable_pokemons ) {
                self.processCatchablePokemons(this.catchable_pokemons);
            }
            if (this.forts) {
                self.processForts(this.forts);
            }
        });
    };

    this.processForts = function (forts) {
        self = this;
        $.each(forts, function () {
            if (this.gym_details) {
                self.processGym(this);
            } else if (this.type && (this.type == 1)) {
                self.processPokeStop(this);
            }
        });
    };

    this.processGym = function (gym) {
        EventDispatcher.dispatchEvent({
            type: "gym",
            id: gym["id"],
            lat: gym["latitude"],
            lng: gym["longitude"],
            owned_by_team: gym['owned_by_team']
        });
    };

    this.processPokeStop = function (pokeStop) {
        EventDispatcher.dispatchEvent({
            type: "pokestop",
            id: pokeStop["id"],
            lat: pokeStop["latitude"],
            lng: pokeStop["longitude"]
        });
    };
    
    this.processCatchablePokemons = function(pokemons) {
        self = this;
        $.each(pokemons, function () {
            self.processPokemon(this);
        });
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
};