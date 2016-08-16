
var PokemonMap = function (ctnId) {

    this.teams = [
        'TeamLess',
        'Mystic',
        'Valor',
        'Instinct'
    ];
    
    this.ctnId = ctnId;

    this.follow = true;

    this.trainer = null;
    this.trainerPath = null;
    this.pokestops = {};
    this.gyms = {};
    this.pokemons = {};

    this.pathcoords = [];


    this.initMap = function () {
        var position,
                last_pos_string = localStorage.getItem("position"),
                zoom,
                last_zoom = localStorage.getItem('zoom');
        if (last_pos_string) {
            position = JSON.parse(last_pos_string);
        } else {
            position = {
                lat: 43.6532,
                lng: -79.3832
            };
        }
        if (last_zoom) {
            zoom = parseInt(last_zoom);
        } else {
            zoom = 16;
        }
        this.map = new google.maps.Map(document.getElementById(ctnId), {
            center: position,
            zoom: zoom,
            mapTypeId: 'roadmap'
        });

        this.map.addListener('zoom_changed', function () {
            window.localStorage.setItem('zoom', this.zoom);
        });
        this.map.addListener('drag', function () {
            this.setFollow(false);
        }.bind(this));
        
        this.map.addListener('bounds_changed', $.throttle(2000, function() {
            this.updateForts();
        }.bind(this)));

        EventDispatcher.addEventListener("position", this.updateTrainer.bind(this));
        EventDispatcher.addEventListener("pokestop", this.updatePokestop.bind(this));
        EventDispatcher.addEventListener("gym", this.updateGym.bind(this));
        EventDispatcher.addEventListener("pokemon", this.markPokemon.bind(this));
        
    };

    this.updateTrainer = function (event) {
        var position = {
            lat: event.lat,
            lng: event.lng
        };
        localStorage.setItem("position", JSON.stringify(position));

        if (!this.trainer) {
            this.trainer = new google.maps.Marker({
                map: this.map,
                position: position,
                icon: 'image/trainer/m122.png',
                zIndex: 2,
                label: "Trainer",
                clickable: false
            });
        } else {
            this.trainer.setPosition(position);
        }

        if (this.follow) {
            this.map.panTo(position);
        }

        this.pathcoords.push(position);
        if (this.pathcoords.length > 1) {
            if (this.trainerPath) {
                this.trainerPath.setPath(this.pathcoords);
            } else {
                this.trainerPath = new google.maps.Polyline({
                    map: this.map,
                    path: this.pathcoords,
                    geodisc: true,
                    strokeColor: "#A52A2A",
                    strokeOpacity: 1.0,
                    strokeWeight: 2
                });
            }
        }
    };
    
    this.updateForts = function() {
        var mapBounds = this.map.getBounds();
        var arrayBounds = [
            mapBounds.getSouthWest().lat(),
            mapBounds.getSouthWest().lng(),
            mapBounds.getNorthEast().lat(),
            mapBounds.getNorthEast().lng() 
        ];
        $.post('service.php?method=getForts', {bounds:arrayBounds}, function(reply) {
            if ( reply['done']) {
                var result = reply['result'];
                var self = this;
                $.each(result['gyms'], function() {
                    self.updateGym(this);
                });
                $.each(result['pokestops'], function() {
                    self.updatePokestop(this);
                });
            }
        }.bind(this));
    };

    this.updatePokestop = function (event) {
        if (this.pokestops[event["_id"]]) {
            return;
        }

        var marker = new google.maps.Marker({
            map: this.map,
            position: {
                lat: event.loc[0],
                lng: event.loc[1]
            },
            icon: 'image/forts/img_pokestop.png'
        });
        this.pokestops[event['_id']] = marker;
    };

    this.updateGym = function (event) {
        if (this.gyms[event["_id"]]) {
            return;
        }

        var marker = new google.maps.Marker({
            map: this.map,
            position: {
                lat: event.loc[0],
                lng: event.loc[1]
            },
            icon: 'image/forts/' + this.teams[(event.owned_by_team || 0)] + '.png'
        });

        this.gyms[event["_id"]] = marker;
    };

    this.markPokemon = function (event) {
        if (this.pokemons[event["encounter_id"]]) {
            return;
        }

        var marker = new google.maps.Marker({
            map: this.map,
            position: {
                lat: event.lat,
                lng: event.lng
            },
            icon: {
                url: 'image/pokemon/' + ('00' + event.pokemon_id).slice(-3) + '.png',
                scaledSize: new google.maps.Size(70, 70)
            },
            zIndex: 4,
            optimized: false,
            clickable: false
        });

        this.pokemons[event["encounter_id"]] = marker;
    };

    this.setFollow = function (follow) {
        this.follow = follow;
        if (follow) {
            if (this.pathcoords.length > 0) {
                this.map.panTo(this.pathcoords[this.pathcoords.length - 1]);
            }
        }
    };

    this.initMap();
};

