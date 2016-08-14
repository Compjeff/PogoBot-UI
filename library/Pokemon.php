<?php

class Pokemon {

    static $_pokemonData = array(
        0 =>
        array(
            'Number' => '001',
            'Name' => 'Bulbasaur',
            'Classification' => 'Seed Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Tackle',
                1 => 'Vine Whip',
            ),
            'Weight' => '6.9 kg',
            'Height' => '0.7 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 1,
                'Name' => 'Bulbasaur candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '002',
                    'Name' => 'Ivysaur',
                ),
                1 =>
                array(
                    'Number' => '003',
                    'Name' => 'Venusaur',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Power Whip',
                1 => 'Seed Bomb',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 126,
            'BaseDefense' => 90,
            'BaseStamina' => 126,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.10000000000000001,
        ),
        1 =>
        array(
            'Number' => '002',
            'Name' => 'Ivysaur',
            'Classification' => 'Seed Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Razor Leaf',
                1 => 'Vine Whip',
            ),
            'Weight' => '13.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '001',
                    'Name' => 'Bulbasaur',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 1,
                'Name' => 'Bulbasaur candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '003',
                    'Name' => 'Venusaur',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Power Whip',
                1 => 'Sludge Bomb',
                2 => 'Solar Beam',
            ),
            'BaseAttack' => 156,
            'BaseDefense' => 120,
            'BaseStamina' => 158,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.070000000000000007,
        ),
        2 =>
        array(
            'Number' => '003',
            'Name' => 'Venusaur',
            'Classification' => 'Seed Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Razor Leaf',
                1 => 'Vine Whip',
            ),
            'Weight' => '100.0 kg',
            'Height' => '2.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '001',
                    'Name' => 'Bulbasaur',
                ),
                1 =>
                array(
                    'Number' => '002',
                    'Name' => 'Ivysaur',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Petal Blizzard',
                1 => 'Sludge Bomb',
                2 => 'Solar Beam',
            ),
            'BaseAttack' => 198,
            'BaseDefense' => 160,
            'BaseStamina' => 200,
            'CaptureRate' => 0.040000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        3 =>
        array(
            'Number' => '004',
            'Name' => 'Charmander',
            'Classification' => 'Lizard Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Scratch',
            ),
            'Weight' => '8.5 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 4,
                'Name' => 'Charmander candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '005',
                    'Name' => 'Charmeleon',
                ),
                1 =>
                array(
                    'Number' => '006',
                    'Name' => 'Charizard',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Flame Burst',
                1 => 'Flame Charge',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 128,
            'BaseDefense' => 78,
            'BaseStamina' => 108,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.10000000000000001,
        ),
        4 =>
        array(
            'Number' => '005',
            'Name' => 'Charmeleon',
            'Classification' => 'Flame Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Scratch',
            ),
            'Weight' => '19.0 kg',
            'Height' => '1.1 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '004',
                    'Name' => 'Charmander',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 4,
                'Name' => 'Charmander candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '006',
                    'Name' => 'Charizard',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Fire Punch',
                1 => 'Flame Burst',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 160,
            'BaseDefense' => 116,
            'BaseStamina' => 140,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.070000000000000007,
        ),
        5 =>
        array(
            'Number' => '006',
            'Name' => 'Charizard',
            'Classification' => 'Flame Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Electric',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Wing Attack',
            ),
            'Weight' => '90.5 kg',
            'Height' => '1.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '004',
                    'Name' => 'Charmander',
                ),
                1 =>
                array(
                    'Number' => '005',
                    'Name' => 'Charmeleon',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dragon Claw',
                1 => 'Fire Blast',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 212,
            'BaseDefense' => 156,
            'BaseStamina' => 182,
            'CaptureRate' => 0.040000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        6 =>
        array(
            'Number' => '007',
            'Name' => 'Squirtle',
            'Classification' => 'Tiny Turtle Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Tackle',
            ),
            'Weight' => '9.0 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 7,
                'Name' => 'Squirtle candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '008',
                    'Name' => 'Wartortle',
                ),
                1 =>
                array(
                    'Number' => '009',
                    'Name' => 'Blastoise',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Jet',
                1 => 'Aqua Tail',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 112,
            'BaseDefense' => 88,
            'BaseStamina' => 142,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.10000000000000001,
        ),
        7 =>
        array(
            'Number' => '008',
            'Name' => 'Wartortle',
            'Classification' => 'Turtle Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Water Gun',
            ),
            'Weight' => '22.5 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '007',
                    'Name' => 'Squirtle',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 7,
                'Name' => 'Squirtle candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '009',
                    'Name' => 'Blastoise',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Jet',
                1 => 'Hydro Pump',
                2 => 'Ice Beam',
            ),
            'BaseAttack' => 144,
            'BaseDefense' => 118,
            'BaseStamina' => 176,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.070000000000000007,
        ),
        8 =>
        array(
            'Number' => '009',
            'Name' => 'Blastoise',
            'Classification' => 'Shellfish Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Water Gun',
            ),
            'Weight' => '85.5 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '007',
                    'Name' => 'Squirtle',
                ),
                1 =>
                array(
                    'Number' => '008',
                    'Name' => 'Wartortle',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Flash Cannon',
                1 => 'Hydro Pump',
                2 => 'Ice Beam',
            ),
            'BaseAttack' => 186,
            'BaseDefense' => 158,
            'BaseStamina' => 222,
            'CaptureRate' => 0.040000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        9 =>
        array(
            'Number' => '010',
            'Name' => 'Caterpie',
            'Classification' => 'Worm Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Tackle',
            ),
            'Weight' => '2.9 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 12,
                'Family' => 10,
                'Name' => 'Caterpie candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '011',
                    'Name' => 'Metapod',
                ),
                1 =>
                array(
                    'Number' => '012',
                    'Name' => 'Butterfree',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Struggle',
            ),
            'BaseAttack' => 62,
            'BaseDefense' => 90,
            'BaseStamina' => 66,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.20000000000000001,
        ),
        10 =>
        array(
            'Number' => '011',
            'Name' => 'Metapod',
            'Classification' => 'Cocoon Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Tackle',
            ),
            'Weight' => '9.9 kg',
            'Height' => '0.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '010',
                    'Name' => 'Caterpie',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 10,
                'Name' => 'Caterpie candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '012',
                    'Name' => 'Butterfree',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Struggle',
            ),
            'BaseAttack' => 56,
            'BaseDefense' => 100,
            'BaseStamina' => 86,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        11 =>
        array(
            'Number' => '012',
            'Name' => 'Butterfree',
            'Classification' => 'Butterfly Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Electric',
                2 => 'Ice',
                3 => 'Flying',
                4 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Confusion',
            ),
            'Weight' => '32.0 kg',
            'Height' => '1.1 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '010',
                    'Name' => 'Caterpie',
                ),
                1 =>
                array(
                    'Number' => '011',
                    'Name' => 'Metapod',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bug Buzz',
                1 => 'Psychic',
                2 => 'Signal Beam',
            ),
            'BaseAttack' => 144,
            'BaseDefense' => 120,
            'BaseStamina' => 144,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.059999999999999998,
        ),
        12 =>
        array(
            'Number' => '013',
            'Name' => 'Weedle',
            'Classification' => 'Hairy Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Poison Sting',
            ),
            'Weight' => '3.2 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 12,
                'Family' => 13,
                'Name' => 'Weedle candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '014',
                    'Name' => 'Kakuna',
                ),
                1 =>
                array(
                    'Number' => '015',
                    'Name' => 'Beedrill',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Struggle',
            ),
            'BaseAttack' => 68,
            'BaseDefense' => 80,
            'BaseStamina' => 64,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.20000000000000001,
        ),
        13 =>
        array(
            'Number' => '014',
            'Name' => 'Kakuna',
            'Classification' => 'Cocoon Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Poison Sting',
            ),
            'Weight' => '10.0 kg',
            'Height' => '0.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '013',
                    'Name' => 'Weedle',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 13,
                'Name' => 'Weedle candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '015',
                    'Name' => 'Beedrill',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Struggle',
            ),
            'BaseAttack' => 62,
            'BaseDefense' => 90,
            'BaseStamina' => 82,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        14 =>
        array(
            'Number' => '015',
            'Name' => 'Beedrill',
            'Classification' => 'Poison Bee Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Poison Jab',
            ),
            'Weight' => '29.5 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '013',
                    'Name' => 'Weedle',
                ),
                1 =>
                array(
                    'Number' => '014',
                    'Name' => 'Kakuna',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Sludge Bomb',
                2 => 'X Scissor',
            ),
            'BaseAttack' => 144,
            'BaseDefense' => 130,
            'BaseStamina' => 130,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.059999999999999998,
        ),
        15 =>
        array(
            'Number' => '016',
            'Name' => 'Pidgey',
            'Classification' => 'Tiny Bird Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Tackle',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Air Cutter',
                2 => 'Twister',
            ),
            'Weight' => '1.8 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 12,
                'Family' => 16,
                'Name' => 'Pidgey candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '017',
                    'Name' => 'Pidgeotto',
                ),
                1 =>
                array(
                    'Number' => '018',
                    'Name' => 'Pidgeot',
                ),
            ),
            'BaseAttack' => 94,
            'BaseDefense' => 80,
            'BaseStamina' => 90,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.20000000000000001,
        ),
        16 =>
        array(
            'Number' => '017',
            'Name' => 'Pidgeotto',
            'Classification' => 'Bird Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Steel Wing',
                1 => 'Wing Attack',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Air Cutter',
                2 => 'Twister',
            ),
            'Weight' => '30.0 kg',
            'Height' => '1.1 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '016',
                    'Name' => 'Pidgey',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 16,
                'Name' => 'Pidgey candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '018',
                    'Name' => 'Pidgeot',
                ),
            ),
            'BaseAttack' => 126,
            'BaseDefense' => 126,
            'BaseStamina' => 122,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        17 =>
        array(
            'Number' => '018',
            'Name' => 'Pidgeot',
            'Classification' => 'Bird Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Steel Wing',
                1 => 'Wing Attack',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Air Cutter',
                2 => 'Hurricane',
            ),
            'Weight' => '39.5 kg',
            'Height' => '1.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '016',
                    'Name' => 'Pidgey',
                ),
                1 =>
                array(
                    'Number' => '017',
                    'Name' => 'Pidgeotto',
                ),
            ),
            'BaseAttack' => 170,
            'BaseDefense' => 166,
            'BaseStamina' => 166,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.059999999999999998,
        ),
        18 =>
        array(
            'Number' => '019',
            'Name' => 'Rattata',
            'Classification' => 'Mouse Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Tackle',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Dig',
                2 => 'Hyper Fang',
            ),
            'Weight' => '3.5 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 19,
                'Name' => 'Rattata candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '020',
                    'Name' => 'Raticate',
                ),
            ),
            'BaseAttack' => 92,
            'BaseDefense' => 60,
            'BaseStamina' => 86,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.20000000000000001,
        ),
        19 =>
        array(
            'Number' => '020',
            'Name' => 'Raticate',
            'Classification' => 'Mouse Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Quick Attack',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Hyper Beam',
                2 => 'Hyper Fang',
            ),
            'Weight' => '18.5 kg',
            'Height' => '0.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '019',
                    'Name' => 'Rattata',
                ),
            ),
            'BaseAttack' => 146,
            'BaseDefense' => 110,
            'BaseStamina' => 150,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        20 =>
        array(
            'Number' => '021',
            'Name' => 'Spearow',
            'Classification' => 'Tiny Bird Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Peck',
                1 => 'Quick Attack',
            ),
            'Weight' => '2.0 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 21,
                'Name' => 'Spearow candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '022',
                    'Name' => 'Fearow',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Drill Peck',
                2 => 'Twister',
            ),
            'BaseAttack' => 102,
            'BaseDefense' => 80,
            'BaseStamina' => 78,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        21 =>
        array(
            'Number' => '022',
            'Name' => 'Fearow',
            'Classification' => 'Beak Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Peck',
                1 => 'Steel Wing',
            ),
            'Weight' => '38.0 kg',
            'Height' => '1.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '021',
                    'Name' => 'Spearow',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Drill Run',
                2 => 'Twister',
            ),
            'BaseAttack' => 168,
            'BaseDefense' => 130,
            'BaseStamina' => 146,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        22 =>
        array(
            'Number' => '023',
            'Name' => 'Ekans',
            'Classification' => 'Snake Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Poison Sting',
            ),
            'Weight' => '6.9 kg',
            'Height' => '2.0 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 23,
                'Name' => 'Ekans candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '024',
                    'Name' => 'Arbok',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Gunk Shot',
                1 => 'Sludge Bomb',
                2 => 'Wrap',
            ),
            'BaseAttack' => 112,
            'BaseDefense' => 70,
            'BaseStamina' => 112,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        23 =>
        array(
            'Number' => '024',
            'Name' => 'Arbok',
            'Classification' => 'Cobra Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Bite',
            ),
            'Weight' => '65.0 kg',
            'Height' => '3.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '023',
                    'Name' => 'Ekans',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Gunk Shot',
                2 => 'Sludge Wave',
            ),
            'BaseAttack' => 166,
            'BaseDefense' => 120,
            'BaseStamina' => 166,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        24 =>
        array(
            'Number' => '025',
            'Name' => 'Pikachu',
            'Classification' => 'Mouse Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Thunder Shock',
            ),
            'Weight' => '6.0 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 25,
                'Name' => 'Pikachu candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '026',
                    'Name' => 'Raichu',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Thunder',
                2 => 'Thunderbolt',
            ),
            'BaseAttack' => 124,
            'BaseDefense' => 70,
            'BaseStamina' => 108,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.10000000000000001,
        ),
        25 =>
        array(
            'Number' => '026',
            'Name' => 'Raichu',
            'Classification' => 'Mouse Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Spark',
                1 => 'Thunder Shock',
            ),
            'Weight' => '30.0 kg',
            'Height' => '0.8 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '025',
                    'Name' => 'Pikachu',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Brick Break',
                1 => 'Thunder',
                2 => 'Thunder Punch',
            ),
            'BaseAttack' => 200,
            'BaseDefense' => 120,
            'BaseStamina' => 154,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.059999999999999998,
        ),
        26 =>
        array(
            'Number' => '027',
            'Name' => 'Sandshrew',
            'Classification' => 'Mouse Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Scratch',
            ),
            'Weight' => '12.0 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 27,
                'Name' => 'Sandshrew candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '028',
                    'Name' => 'Sandslash',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Rock Slide',
                2 => 'Rock Tomb',
            ),
            'BaseAttack' => 90,
            'BaseDefense' => 100,
            'BaseStamina' => 114,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        27 =>
        array(
            'Number' => '028',
            'Name' => 'Sandslash',
            'Classification' => 'Mouse Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Metal Claw',
                1 => 'Mud Shot',
            ),
            'Weight' => '29.5 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '027',
                    'Name' => 'Sandshrew',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bulldoze',
                1 => 'Earthquake',
                2 => 'Rock Tomb',
            ),
            'BaseAttack' => 150,
            'BaseDefense' => 150,
            'BaseStamina' => 172,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        28 =>
        array(
            'Number' => '029',
            'Name' => 'Nidoran F',
            'Classification' => 'Poison Pin Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Poison Sting',
            ),
            'Weight' => '7.0 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 29,
                'Name' => 'Nidoran F candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '030',
                    'Name' => 'Nidorina',
                ),
                1 =>
                array(
                    'Number' => '031',
                    'Name' => 'Nidoqueen',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Poison Fang',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 100,
            'BaseDefense' => 110,
            'BaseStamina' => 104,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        29 =>
        array(
            'Number' => '030',
            'Name' => 'Nidorina',
            'Classification' => 'Poison Pin Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Poison Sting',
            ),
            'Weight' => '20.0 kg',
            'Height' => '0.8 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '029',
                    'Name' => 'Nidoran  F',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 29,
                'Name' => 'Nidoran F candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '031',
                    'Name' => 'Nidoqueen',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Poison Fang',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 132,
            'BaseDefense' => 140,
            'BaseStamina' => 136,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        30 =>
        array(
            'Number' => '031',
            'Name' => 'Nidoqueen',
            'Classification' => 'Drill Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Type II' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ice',
                2 => 'Ground',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Poison Jab',
            ),
            'Weight' => '60.0 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '029',
                    'Name' => 'Nidoran F',
                ),
                1 =>
                array(
                    'Number' => '030',
                    'Name' => 'Nidorina',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Earthquake',
                1 => 'Sludge Wave',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 184,
            'BaseDefense' => 180,
            'BaseStamina' => 190,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        31 =>
        array(
            'Number' => '032',
            'Name' => 'Nidoran M',
            'Classification' => 'Poison Pin Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Peck',
                1 => 'Poison Sting',
            ),
            'Weight' => '9.0 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 32,
                'Name' => 'Nidoran M candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '033',
                    'Name' => 'Nidorino',
                ),
                1 =>
                array(
                    'Number' => '034',
                    'Name' => 'Nidoking',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Horn Attack',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 110,
            'BaseDefense' => 92,
            'BaseStamina' => 94,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        32 =>
        array(
            'Number' => '033',
            'Name' => 'Nidorino',
            'Classification' => 'Poison Pin Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Poison Jab',
                1 => 'Poison Sting',
            ),
            'Weight' => '19.5 kg',
            'Height' => '0.9 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '032',
                    'Name' => 'Nidoran M',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 32,
                'Name' => 'Nidoran M candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '034',
                    'Name' => 'Nidoking',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Horn Attack',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 142,
            'BaseDefense' => 122,
            'BaseStamina' => 128,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        33 =>
        array(
            'Number' => '034',
            'Name' => 'Nidoking',
            'Classification' => 'Drill Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Type II' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ice',
                2 => 'Ground',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Fury Cutter',
                1 => 'Poison Jab',
            ),
            'Weight' => '62.0 kg',
            'Height' => '1.4 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '032',
                    'Name' => 'Nidoran M',
                ),
                1 =>
                array(
                    'Number' => '033',
                    'Name' => 'Nidorino',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Earthquake',
                1 => 'Megahorn',
                2 => 'Sludge Wave',
            ),
            'BaseAttack' => 204,
            'BaseDefense' => 162,
            'BaseStamina' => 170,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        34 =>
        array(
            'Number' => '035',
            'Name' => 'Clefairy',
            'Classification' => 'Fairy Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Pound',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '7.5 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 35,
                'Name' => 'Clefairy candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '036',
                    'Name' => 'Clefable',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Disarming Voice',
                2 => 'Moonblast',
            ),
            'BaseAttack' => 116,
            'BaseDefense' => 140,
            'BaseStamina' => 124,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.10000000000000001,
        ),
        35 =>
        array(
            'Number' => '036',
            'Name' => 'Clefable',
            'Classification' => 'Fairy Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Pound',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '40.0 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '035',
                    'Name' => 'Clefairy',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dazzling Gleam',
                1 => 'Moonblast',
                2 => 'Psychic',
            ),
            'BaseAttack' => 178,
            'BaseDefense' => 190,
            'BaseStamina' => 178,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.059999999999999998,
        ),
        36 =>
        array(
            'Number' => '037',
            'Name' => 'Vulpix',
            'Classification' => 'Fox Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Quick Attack',
            ),
            'Weight' => '9.9 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 37,
                'Name' => 'Vulpix candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '038',
                    'Name' => 'Ninetales',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Flame Charge',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 106,
            'BaseDefense' => 76,
            'BaseStamina' => 118,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.10000000000000001,
        ),
        37 =>
        array(
            'Number' => '038',
            'Name' => 'Ninetales',
            'Classification' => 'Fox Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Feint Attack',
            ),
            'Weight' => '19.9 kg',
            'Height' => '1.1 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '037',
                    'Name' => 'Vulpix',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Fire Blast',
                1 => 'Flamethrower',
                2 => 'Heat Wave',
            ),
            'BaseAttack' => 176,
            'BaseDefense' => 146,
            'BaseStamina' => 194,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.059999999999999998,
        ),
        38 =>
        array(
            'Number' => '039',
            'Name' => 'Jigglypuff',
            'Classification' => 'Balloon Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Feint Attack',
                1 => 'Pound',
            ),
            'Weight' => '5.5 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 39,
                'Name' => 'Jigglypuff candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '039',
                    'Name' => 'Jigglypuff',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Disarming Voice',
                2 => 'Play Rough',
            ),
            'BaseAttack' => 98,
            'BaseDefense' => 230,
            'BaseStamina' => 54,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        39 =>
        array(
            'Number' => '040',
            'Name' => 'Wigglytuff',
            'Classification' => 'Balloon Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Feint Attack',
                1 => 'Pound',
            ),
            'Weight' => '12.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '040',
                    'Name' => 'Wigglytuff',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dazzling Gleam',
                1 => 'Hyper Beam',
                2 => 'Play Rough',
            ),
            'BaseAttack' => 168,
            'BaseDefense' => 280,
            'BaseStamina' => 108,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        40 =>
        array(
            'Number' => '041',
            'Name' => 'Zubat',
            'Classification' => 'Bat Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Ice',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Quick Attack',
            ),
            'Weight' => '7.5 kg',
            'Height' => '0.8 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 41,
                'Name' => 'Zubat candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '042',
                    'Name' => 'Golbat',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Air Cutter',
                1 => 'Poison Fang',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 88,
            'BaseDefense' => 80,
            'BaseStamina' => 90,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.20000000000000001,
        ),
        41 =>
        array(
            'Number' => '042',
            'Name' => 'Golbat',
            'Classification' => 'Bat Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Ice',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Wing Attack',
            ),
            'Weight' => '55.0 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '041',
                    'Name' => 'Zubat',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Air Cutter',
                1 => 'Ominous Wind',
                2 => 'Poison Fang',
            ),
            'BaseAttack' => 164,
            'BaseDefense' => 150,
            'BaseStamina' => 164,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        42 =>
        array(
            'Number' => '043',
            'Name' => 'Oddish',
            'Classification' => 'Weed Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Razor Leaf',
            ),
            'Weight' => '5.4 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 43,
                'Name' => 'Oddish candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '044',
                    'Name' => 'Gloom',
                ),
                1 =>
                array(
                    'Number' => '045',
                    'Name' => 'Vileplume',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Moonblast',
                1 => 'Seed Bomb',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 134,
            'BaseDefense' => 90,
            'BaseStamina' => 130,
            'CaptureRate' => 0.47999999999999998,
            'FleeRate' => 0.14999999999999999,
        ),
        43 =>
        array(
            'Number' => '044',
            'Name' => 'Gloom',
            'Classification' => 'Weed Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Razor Leaf',
            ),
            'Weight' => '8.6 kg',
            'Height' => '0.8 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '043',
                    'Name' => 'Oddish',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 43,
                'Name' => 'Oddish candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '045',
                    'Name' => 'Vileplume',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Moonblast',
                1 => 'Petal Blizzard',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 162,
            'BaseDefense' => 120,
            'BaseStamina' => 158,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.070000000000000007,
        ),
        44 =>
        array(
            'Number' => '045',
            'Name' => 'Vileplume',
            'Classification' => 'Flower Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Razor Leaf',
            ),
            'Weight' => '18.6 kg',
            'Height' => '1.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '043',
                    'Name' => 'Oddish',
                ),
                1 =>
                array(
                    'Number' => '044',
                    'Name' => 'Gloom',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Moonblast',
                1 => 'Petal Blizzard',
                2 => 'Solar Beam',
            ),
            'BaseAttack' => 202,
            'BaseDefense' => 150,
            'BaseStamina' => 190,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.050000000000000003,
        ),
        45 =>
        array(
            'Number' => '046',
            'Name' => 'Paras',
            'Classification' => 'Mushroom Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Grass',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Poison',
                3 => 'Flying',
                4 => 'Bug',
                5 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Scratch',
            ),
            'Weight' => '5.4 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 46,
                'Name' => 'Paras candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '047',
                    'Name' => 'Parasect',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Cross Poison',
                1 => 'Seed Bomb',
                2 => 'X Scissor',
            ),
            'BaseAttack' => 122,
            'BaseDefense' => 70,
            'BaseStamina' => 120,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.14999999999999999,
        ),
        46 =>
        array(
            'Number' => '047',
            'Name' => 'Parasect',
            'Classification' => 'Mushroom Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Grass',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Poison',
                3 => 'Flying',
                4 => 'Bug',
                5 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Fury Cutter',
            ),
            'Weight' => '29.5 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '046',
                    'Name' => 'Paras',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Cross Poison',
                1 => 'Solar Beam',
                2 => 'X Scissor',
            ),
            'BaseAttack' => 162,
            'BaseDefense' => 120,
            'BaseStamina' => 170,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        47 =>
        array(
            'Number' => '048',
            'Name' => 'Venonat',
            'Classification' => 'Insect Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Confusion',
            ),
            'Weight' => '30.0 kg',
            'Height' => '1.0 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 48,
                'Name' => 'Venonat candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '049',
                    'Name' => 'Venomoth',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dazzling Gleam',
                1 => 'Psybeam',
                2 => 'Poison Fang',
                3 => 'Shadow Ball',
            ),
            'BaseAttack' => 108,
            'BaseDefense' => 120,
            'BaseStamina' => 118,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        48 =>
        array(
            'Number' => '049',
            'Name' => 'Venomoth',
            'Classification' => 'Poison Moth Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Psychic',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bug Bite',
                1 => 'Confusion',
            ),
            'Weight' => '12.5 kg',
            'Height' => '1.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '048',
                    'Name' => 'Venonat',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bug Buzz',
                1 => 'Poison Fang',
                2 => 'Psychic',
            ),
            'BaseAttack' => 172,
            'BaseDefense' => 140,
            'BaseStamina' => 154,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        49 =>
        array(
            'Number' => '050',
            'Name' => 'Diglett',
            'Classification' => 'Mole Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Scratch',
            ),
            'Weight' => '0.8 kg',
            'Height' => '0.2 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 50,
                'Name' => 'Diglett candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '051',
                    'Name' => 'Dugtrio',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Mud Bomb',
                2 => 'Rock Tomb',
            ),
            'BaseAttack' => 108,
            'BaseDefense' => 20,
            'BaseStamina' => 86,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        50 =>
        array(
            'Number' => '051',
            'Name' => 'Dugtrio',
            'Classification' => 'Mole Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Sucker Punch',
            ),
            'Weight' => '33.3 kg',
            'Height' => '0.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '050',
                    'Name' => 'Diglett',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Earthquake',
                1 => 'Mud Bomb',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 148,
            'BaseDefense' => 70,
            'BaseStamina' => 140,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        51 =>
        array(
            'Number' => '052',
            'Name' => 'Meowth',
            'Classification' => 'Scratch Cat Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Scratch',
            ),
            'Weight' => '4.2 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 52,
                'Name' => 'Meowth candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '053',
                    'Name' => 'Persian',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Dark Pulse',
                2 => 'Night Slash',
            ),
            'BaseAttack' => 104,
            'BaseDefense' => 80,
            'BaseStamina' => 94,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        52 =>
        array(
            'Number' => '053',
            'Name' => 'Persian',
            'Classification' => 'Classy Cat Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Feint Attack',
                1 => 'Scratch',
            ),
            'Weight' => '32.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '052',
                    'Name' => 'Meowth',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Night Slash',
                1 => 'Play Rough',
                2 => 'Power Gem',
            ),
            'BaseAttack' => 156,
            'BaseDefense' => 130,
            'BaseStamina' => 146,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        53 =>
        array(
            'Number' => '054',
            'Name' => 'Psyduck',
            'Classification' => 'Duck Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Water Gun',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '19.6 kg',
            'Height' => '0.8 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 54,
                'Name' => 'Psyduck candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '055',
                    'Name' => 'Golduck',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Tail',
                1 => 'Cross Chop',
                2 => 'Psybeam',
            ),
            'BaseAttack' => 132,
            'BaseDefense' => 100,
            'BaseStamina' => 112,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        54 =>
        array(
            'Number' => '055',
            'Name' => 'Golduck',
            'Classification' => 'Duck Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Water Gun',
            ),
            'Weight' => '76.6 kg',
            'Height' => '1.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '054',
                    'Name' => 'Psyduck',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Hydro Pump',
                1 => 'Ice Beam',
                2 => 'Psychic',
            ),
            'BaseAttack' => 194,
            'BaseDefense' => 160,
            'BaseStamina' => 176,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        55 =>
        array(
            'Number' => '056',
            'Name' => 'Mankey',
            'Classification' => 'Pig Monkey Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Karate Chop',
                1 => 'Scratch',
            ),
            'Weight' => '28.0 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 56,
                'Name' => 'Mankey candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '057',
                    'Name' => 'Primeape',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Brick Break',
                1 => 'Cross Chop',
                2 => 'Low Sweep',
            ),
            'BaseAttack' => 122,
            'BaseDefense' => 80,
            'BaseStamina' => 96,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        56 =>
        array(
            'Number' => '057',
            'Name' => 'Primeape',
            'Classification' => 'Pig Monkey Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Karate Chop',
                1 => 'Low Kick',
            ),
            'Weight' => '32.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '056',
                    'Name' => 'Mankey',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Cross Chop',
                1 => 'Low Sweep',
                2 => 'Night Slash',
            ),
            'BaseAttack' => 178,
            'BaseDefense' => 130,
            'BaseStamina' => 150,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        57 =>
        array(
            'Number' => '058',
            'Name' => 'Growlithe',
            'Classification' => 'Puppy Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Ember',
            ),
            'Weight' => '19.0 kg',
            'Height' => '0.7 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 58,
                'Name' => 'Growlithe candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '059',
                    'Name' => 'Arcanine',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Flame Wheel',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 156,
            'BaseDefense' => 110,
            'BaseStamina' => 110,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.10000000000000001,
        ),
        58 =>
        array(
            'Number' => '059',
            'Name' => 'Arcanine',
            'Classification' => 'Legendary Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Fire Fang',
            ),
            'Weight' => '155.0 kg',
            'Height' => '1.9 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '058',
                    'Name' => 'Growlithe',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bulldoze',
                1 => 'Fire Blast',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 230,
            'BaseDefense' => 180,
            'BaseStamina' => 180,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.059999999999999998,
        ),
        59 =>
        array(
            'Number' => '060',
            'Name' => 'Poliwag',
            'Classification' => 'Tadpole Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Mud Shot',
            ),
            'Weight' => '12.4 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 60,
                'Name' => 'Poliwag candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '061',
                    'Name' => 'Poliwhirl',
                ),
                1 =>
                array(
                    'Number' => '062',
                    'Name' => 'Poliwrath',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Bubble Beam',
                2 => 'Mud Bomb',
            ),
            'BaseAttack' => 108,
            'BaseDefense' => 80,
            'BaseStamina' => 98,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        60 =>
        array(
            'Number' => '061',
            'Name' => 'Poliwhirl',
            'Classification' => 'Tadpole Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Mud Shot',
            ),
            'Weight' => '20.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '060',
                    'Name' => 'Poliwag',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 60,
                'Name' => 'Poliwag candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '062',
                    'Name' => 'Poliwrath',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bubble Beam',
                1 => 'Mud Bomb',
                2 => 'Scald',
            ),
            'BaseAttack' => 132,
            'BaseDefense' => 130,
            'BaseStamina' => 132,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        61 =>
        array(
            'Number' => '062',
            'Name' => 'Poliwrath',
            'Classification' => 'Tadpole Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Flying',
                3 => 'Psychic',
                4 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Mud Shot',
            ),
            'Weight' => '54.0 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '060',
                    'Name' => 'Poliwag',
                ),
                1 =>
                array(
                    'Number' => '061',
                    'Name' => 'Poliwhirl',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Hydro Pump',
                1 => 'Ice Punch',
                2 => 'Submission',
            ),
            'BaseAttack' => 180,
            'BaseDefense' => 180,
            'BaseStamina' => 202,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        62 =>
        array(
            'Number' => '063',
            'Name' => 'Abra',
            'Classification' => 'Psi Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Zen Headbutt',
            ),
            'Weight' => '19.5 kg',
            'Height' => '0.9 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 63,
                'Name' => 'Abra candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '064',
                    'Name' => 'Kadabra',
                ),
                1 =>
                array(
                    'Number' => '065',
                    'Name' => 'Alakazam',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Psyshock',
                1 => 'Shadow Ball',
                2 => 'Signal Beam',
            ),
            'BaseAttack' => 110,
            'BaseDefense' => 50,
            'BaseStamina' => 76,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.98999999999999999,
        ),
        63 =>
        array(
            'Number' => '064',
            'Name' => 'Kadabra',
            'Classification' => 'Psi Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Psycho Cut',
            ),
            'Weight' => '56.5 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '063',
                    'Name' => 'Abra',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 63,
                'Name' => 'Abra candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '065',
                    'Name' => 'Alakazam',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dazzling Gleam',
                1 => 'Psybeam',
                2 => 'Shadow Ball',
            ),
            'BaseAttack' => 150,
            'BaseDefense' => 80,
            'BaseStamina' => 112,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        64 =>
        array(
            'Number' => '065',
            'Name' => 'Alakazam',
            'Classification' => 'Psi Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Psycho Cut',
            ),
            'Weight' => '48.0 kg',
            'Height' => '1.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '063',
                    'Name' => 'Abra',
                ),
                1 =>
                array(
                    'Number' => '064',
                    'Name' => 'Kadabra',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dazzling Gleam',
                1 => 'Psychic',
                2 => 'Shadow Ball',
            ),
            'BaseAttack' => 186,
            'BaseDefense' => 110,
            'BaseStamina' => 152,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        65 =>
        array(
            'Number' => '066',
            'Name' => 'Machop',
            'Classification' => 'Superpower Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Karate Chop',
                1 => 'Low Kick',
            ),
            'Weight' => '19.5 kg',
            'Height' => '0.8 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 66,
                'Name' => 'Machop candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '067',
                    'Name' => 'Machoke',
                ),
                1 =>
                array(
                    'Number' => '068',
                    'Name' => 'Machamp',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Brick Break',
                1 => 'Cross Chop',
                2 => 'Low Sweep',
            ),
            'BaseAttack' => 118,
            'BaseDefense' => 140,
            'BaseStamina' => 96,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        66 =>
        array(
            'Number' => '067',
            'Name' => 'Machoke',
            'Classification' => 'Superpower Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Karate Chop',
                1 => 'Low Kick',
            ),
            'Weight' => '70.5 kg',
            'Height' => '1.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '066',
                    'Name' => 'Machop',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 66,
                'Name' => 'Machop candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '068',
                    'Name' => 'Machamp',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Brick Break',
                1 => 'Cross Chop',
                2 => 'Submission',
            ),
            'BaseAttack' => 154,
            'BaseDefense' => 160,
            'BaseStamina' => 144,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        67 =>
        array(
            'Number' => '068',
            'Name' => 'Machamp',
            'Classification' => 'Superpower Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bullet Punch',
                1 => 'Karate Chop',
            ),
            'Weight' => '130.0 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '066',
                    'Name' => 'Machop',
                ),
                1 =>
                array(
                    'Number' => '067',
                    'Name' => 'Machoke',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Cross Chop',
                1 => 'Stone Edge',
                2 => 'Submission',
            ),
            'BaseAttack' => 198,
            'BaseDefense' => 180,
            'BaseStamina' => 180,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        68 =>
        array(
            'Number' => '069',
            'Name' => 'Bellsprout',
            'Classification' => 'Flower Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Vine Whip',
            ),
            'Weight' => '4.0 kg',
            'Height' => '0.7 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 69,
                'Name' => 'Bellsprout candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '070',
                    'Name' => 'Weepinbell',
                ),
                1 =>
                array(
                    'Number' => '071',
                    'Name' => 'Victreebel',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Power Whip',
                1 => 'Sludge Bomb',
                2 => 'Wrap',
            ),
            'BaseAttack' => 158,
            'BaseDefense' => 100,
            'BaseStamina' => 78,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        69 =>
        array(
            'Number' => '070',
            'Name' => 'Weepinbell',
            'Classification' => 'Flycatcher Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Razor Leaf',
            ),
            'Weight' => '6.4 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '069',
                    'Name' => 'Bellsprout',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 69,
                'Name' => 'Bellsprout candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '071',
                    'Name' => 'Victreebel',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Power Whip',
                1 => 'Seed Bomb',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 190,
            'BaseDefense' => 130,
            'BaseStamina' => 110,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        70 =>
        array(
            'Number' => '071',
            'Name' => 'Victreebel',
            'Classification' => 'Flycatcher Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Flying',
                3 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Razor Leaf',
            ),
            'Weight' => '15.5 kg',
            'Height' => '1.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '069',
                    'Name' => 'Bellsprout',
                ),
                1 =>
                array(
                    'Number' => '070',
                    'Name' => 'Weepinbell',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Leaf Blade',
                1 => 'Sludge Bomb',
                2 => 'Solar Beam',
            ),
            'BaseAttack' => 222,
            'BaseDefense' => 160,
            'BaseStamina' => 152,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        71 =>
        array(
            'Number' => '072',
            'Name' => 'Tentacool',
            'Classification' => 'Jellyfish Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Ground',
                2 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Poison Sting',
            ),
            'Weight' => '45.5 kg',
            'Height' => '0.9 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 72,
                'Name' => 'Tentacool candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '073',
                    'Name' => 'Tentacruel',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bubble Beam',
                1 => 'Water Pulse',
                2 => 'Wrap',
            ),
            'BaseAttack' => 106,
            'BaseDefense' => 80,
            'BaseStamina' => 136,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        72 =>
        array(
            'Number' => '073',
            'Name' => 'Tentacruel',
            'Classification' => 'Jellyfish Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Ground',
                2 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Poison Jab',
            ),
            'Weight' => '55.0 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '072',
                    'Name' => 'Tentacool',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Blizzard',
                1 => 'Hydro Pump',
                2 => 'Sludge Wave',
            ),
            'BaseAttack' => 170,
            'BaseDefense' => 160,
            'BaseStamina' => 196,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        73 =>
        array(
            'Number' => '074',
            'Name' => 'Geodude',
            'Classification' => 'Rock Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
                3 => 'Fighting',
                4 => 'Ground',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Rock Throw',
                1 => 'Tackle',
            ),
            'Weight' => '20.0 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 74,
                'Name' => 'Geodude candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '075',
                    'Name' => 'Graveler',
                ),
                1 =>
                array(
                    'Number' => '076',
                    'Name' => 'Golem',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Rock Slide',
                2 => 'Rock Tomb',
            ),
            'BaseAttack' => 106,
            'BaseDefense' => 80,
            'BaseStamina' => 118,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        74 =>
        array(
            'Number' => '075',
            'Name' => 'Graveler',
            'Classification' => 'Rock Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
                3 => 'Fighting',
                4 => 'Ground',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Rock Throw',
            ),
            'Weight' => '105.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '074',
                    'Name' => 'Geodude',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 74,
                'Name' => 'Geodude candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '076',
                    'Name' => 'Golem',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dig',
                1 => 'Rock Slide',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 142,
            'BaseDefense' => 110,
            'BaseStamina' => 156,
            'CaptureRate' => 0.20000000000000001,
            'FleeRate' => 0.070000000000000007,
        ),
        75 =>
        array(
            'Number' => '076',
            'Name' => 'Golem',
            'Classification' => 'Megaton Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
                3 => 'Fighting',
                4 => 'Ground',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Rock Throw',
            ),
            'Weight' => '300.0 kg',
            'Height' => '1.4 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '074',
                    'Name' => 'Geodude',
                ),
                1 =>
                array(
                    'Number' => '075',
                    'Name' => 'Graveler',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Earthquake',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 176,
            'BaseDefense' => 160,
            'BaseStamina' => 198,
            'CaptureRate' => 0.10000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        76 =>
        array(
            'Number' => '077',
            'Name' => 'Ponyta',
            'Classification' => 'Fire Horse Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Tackle',
            ),
            'Weight' => '30.0 kg',
            'Height' => '1.0 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 77,
                'Name' => 'Ponyta candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '078',
                    'Name' => 'Rapidash',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Fire Blast',
                1 => 'Flame Charge',
                2 => 'Flame Wheel',
            ),
            'BaseAttack' => 168,
            'BaseDefense' => 100,
            'BaseStamina' => 138,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.10000000000000001,
        ),
        77 =>
        array(
            'Number' => '078',
            'Name' => 'Rapidash',
            'Classification' => 'Fire Horse Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Low Kick',
            ),
            'Weight' => '95.0 kg',
            'Height' => '1.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '077',
                    'Name' => 'Ponyta',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Drill Run',
                1 => 'Fire Blast',
                2 => 'Heat Wave',
            ),
            'BaseAttack' => 200,
            'BaseDefense' => 130,
            'BaseStamina' => 170,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.059999999999999998,
        ),
        78 =>
        array(
            'Number' => '079',
            'Name' => 'Slowpoke',
            'Classification' => 'Dopey Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Bug',
                3 => 'Ghost',
                4 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Water Gun',
            ),
            'Weight' => '36.0 kg',
            'Height' => '1.2 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 79,
                'Name' => 'Slowpoke candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '080',
                    'Name' => 'Slowbro',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Psychic',
                1 => 'Psyshock',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 110,
            'BaseDefense' => 180,
            'BaseStamina' => 110,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        79 =>
        array(
            'Number' => '080',
            'Name' => 'Slowbro',
            'Classification' => 'Hermit Crab Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Bug',
                3 => 'Ghost',
                4 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Water Gun',
            ),
            'Weight' => '78.5 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '079',
                    'Name' => 'Slowpoke',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ice Beam',
                1 => 'Psychic',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 184,
            'BaseDefense' => 190,
            'BaseStamina' => 198,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        80 =>
        array(
            'Number' => '081',
            'Name' => 'Magnemite',
            'Classification' => 'Magnet Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Type II' =>
            array(
                0 => 'Steel',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Water',
                2 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Spark',
                1 => 'Thunder Shock',
            ),
            'Weight' => '6.0 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 81,
                'Name' => 'Magnemite candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '082',
                    'Name' => 'Magneton',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Magnet Bomb',
                2 => 'Thunderbolt',
            ),
            'BaseAttack' => 128,
            'BaseDefense' => 50,
            'BaseStamina' => 138,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        81 =>
        array(
            'Number' => '082',
            'Name' => 'Magneton',
            'Classification' => 'Magnet Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Type II' =>
            array(
                0 => 'Steel',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Water',
                2 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Spark',
                1 => 'Thunder Shock',
            ),
            'Weight' => '60.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '081',
                    'Name' => 'Magnemite',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Flash Cannon',
                2 => 'Magnet Bomb',
            ),
            'BaseAttack' => 186,
            'BaseDefense' => 100,
            'BaseStamina' => 180,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        82 =>
        array(
            'Number' => '083',
            'Name' => 'Farfetch\'d',
            'Classification' => 'Wild Duck Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Cut',
                1 => 'Fury Cutter',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Air Cutter',
                2 => 'Leaf Blade',
            ),
            'Weight' => '15.0 kg',
            'Height' => '0.8 m',
            'BaseAttack' => 138,
            'BaseDefense' => 104,
            'BaseStamina' => 132,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        83 =>
        array(
            'Number' => '084',
            'Name' => 'Doduo',
            'Classification' => 'Twin Bird Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Peck',
                1 => 'Quick Attack',
            ),
            'Weight' => '39.2 kg',
            'Height' => '1.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 84,
                'Name' => 'Doduo candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '085',
                    'Name' => 'Dodrio',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Drill Peck',
                2 => 'Swift',
            ),
            'BaseAttack' => 126,
            'BaseDefense' => 70,
            'BaseStamina' => 96,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        84 =>
        array(
            'Number' => '085',
            'Name' => 'Dodrio',
            'Classification' => 'Triple Bird Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Feint Attack',
                1 => 'Steel Wing',
            ),
            'Weight' => '85.2 kg',
            'Height' => '1.8 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '084',
                    'Name' => 'Doduo',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aerial Ace',
                1 => 'Air Cutter',
                2 => 'Drill Peck',
            ),
            'BaseAttack' => 182,
            'BaseDefense' => 120,
            'BaseStamina' => 150,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        85 =>
        array(
            'Number' => '086',
            'Name' => 'Seel',
            'Classification' => 'Sea Lion Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ice Shard',
                1 => 'Water Gun',
            ),
            'Weight' => '90.0 kg',
            'Height' => '1.1 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 86,
                'Name' => 'Seel candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '087',
                    'Name' => 'Dewgong',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Jet',
                1 => 'Aqua Tail',
                2 => 'Icy Wind',
            ),
            'BaseAttack' => 104,
            'BaseDefense' => 130,
            'BaseStamina' => 138,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.089999999999999997,
        ),
        86 =>
        array(
            'Number' => '087',
            'Name' => 'Dewgong',
            'Classification' => 'Sea Lion Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Ice',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Frost Breath',
                1 => 'Ice Shard',
            ),
            'Weight' => '120.0 kg',
            'Height' => '1.7 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '086',
                    'Name' => 'Seel',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Jet',
                1 => 'Blizzard',
                2 => 'Icy Wind',
            ),
            'BaseAttack' => 156,
            'BaseDefense' => 180,
            'BaseStamina' => 192,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        87 =>
        array(
            'Number' => '088',
            'Name' => 'Grimer',
            'Classification' => 'Sludge Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Mud Slap',
            ),
            'Weight' => '30.0 kg',
            'Height' => '0.9 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 88,
                'Name' => 'Grimer candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '089',
                    'Name' => 'Muk',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Mud Bomb',
                1 => 'Sludge',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 124,
            'BaseDefense' => 160,
            'BaseStamina' => 110,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        88 =>
        array(
            'Number' => '089',
            'Name' => 'Muk',
            'Classification' => 'Sludge Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Poison Jab',
            ),
            'Weight' => '30.0 kg',
            'Height' => '1.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '088',
                    'Name' => 'Grimer',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Gunk Shot',
                2 => 'Sludge Wave',
            ),
            'BaseAttack' => 180,
            'BaseDefense' => 210,
            'BaseStamina' => 188,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        89 =>
        array(
            'Number' => '090',
            'Name' => 'Shellder',
            'Classification' => 'Bivalve Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ice Shard',
                1 => 'Tackle',
            ),
            'Weight' => '4.0 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 90,
                'Name' => 'Shellder candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '091',
                    'Name' => 'Cloyster',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bubble Beam',
                1 => 'Icy Wind',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 120,
            'BaseDefense' => 60,
            'BaseStamina' => 112,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        90 =>
        array(
            'Number' => '091',
            'Name' => 'Cloyster',
            'Classification' => 'Bivalve Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Ice',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Frost Breath',
                1 => 'Ice Shard',
            ),
            'Weight' => '132.5 kg',
            'Height' => '1.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '090',
                    'Name' => 'Shellder',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Blizzard',
                1 => 'Hydro Pump',
                2 => 'Icy Wind',
            ),
            'BaseAttack' => 196,
            'BaseDefense' => 100,
            'BaseStamina' => 196,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        91 =>
        array(
            'Number' => '092',
            'Name' => 'Gastly',
            'Classification' => 'Gas Pokemon',
            'Type I' =>
            array(
                0 => 'Ghost',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
                2 => 'Ghost',
                3 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Lick',
                1 => 'Sucker Punch',
            ),
            'Weight' => '0.1 kg',
            'Height' => '1.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 92,
                'Name' => 'Gastly candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '093',
                    'Name' => 'Haunter',
                ),
                1 =>
                array(
                    'Number' => '094',
                    'Name' => 'Gengar',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Ominous Wind',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 136,
            'BaseDefense' => 60,
            'BaseStamina' => 82,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.10000000000000001,
        ),
        92 =>
        array(
            'Number' => '093',
            'Name' => 'Haunter',
            'Classification' => 'Gas Pokemon',
            'Type I' =>
            array(
                0 => 'Ghost',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
                2 => 'Ghost',
                3 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Lick',
                1 => 'Shadow Claw',
            ),
            'Weight' => '0.1 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '092',
                    'Name' => 'Gastly',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 92,
                'Name' => 'Gastly candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '094',
                    'Name' => 'Gengar',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Shadow Ball',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 172,
            'BaseDefense' => 90,
            'BaseStamina' => 118,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        93 =>
        array(
            'Number' => '094',
            'Name' => 'Gengar',
            'Classification' => 'Shadow Pokemon',
            'Type I' =>
            array(
                0 => 'Ghost',
            ),
            'Type II' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
                2 => 'Ghost',
                3 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Shadow Claw',
                1 => 'Sucker Punch',
            ),
            'Weight' => '40.5 kg',
            'Height' => '1.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '092',
                    'Name' => 'Gastly',
                ),
                1 =>
                array(
                    'Number' => '093',
                    'Name' => 'Haunter',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Shadow Ball',
                2 => 'Sludge Wave',
            ),
            'BaseAttack' => 204,
            'BaseDefense' => 120,
            'BaseStamina' => 156,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.050000000000000003,
        ),
        94 =>
        array(
            'Number' => '095',
            'Name' => 'Onix',
            'Classification' => 'Rock Snake Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
                3 => 'Fighting',
                4 => 'Ground',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Rock Throw',
                1 => 'Tackle',
            ),
            'Weight' => '210.0 kg',
            'Height' => '8.8 m',
            'Special Attack(s)' =>
            array(
                0 => 'Iron Head',
                1 => 'Rock Slide',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 90,
            'BaseDefense' => 70,
            'BaseStamina' => 186,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        95 =>
        array(
            'Number' => '096',
            'Name' => 'Drowzee',
            'Classification' => 'Hypnosis Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Pound',
            ),
            'Weight' => '32.4 kg',
            'Height' => '1.0 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 96,
                'Name' => 'Drowzee candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '097',
                    'Name' => 'Hypno',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Psybeam',
                1 => 'Psychic',
                2 => 'Psyshock',
            ),
            'BaseAttack' => 104,
            'BaseDefense' => 120,
            'BaseStamina' => 140,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        96 =>
        array(
            'Number' => '097',
            'Name' => 'Hypno',
            'Classification' => 'Hypnosis Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '75.6 kg',
            'Height' => '1.6 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '096',
                    'Name' => 'Drowzee',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Psychic',
                1 => 'Psyshock',
                2 => 'Shadow Ball',
            ),
            'BaseAttack' => 162,
            'BaseDefense' => 170,
            'BaseStamina' => 196,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        97 =>
        array(
            'Number' => '098',
            'Name' => 'Krabby',
            'Classification' => 'River Crab Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Mud Shot',
            ),
            'Weight' => '6.5 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 98,
                'Name' => 'Krabby candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '099',
                    'Name' => 'Kingler',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bubble Beam',
                1 => 'Vice Grip',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 116,
            'BaseDefense' => 60,
            'BaseStamina' => 110,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        98 =>
        array(
            'Number' => '099',
            'Name' => 'Kingler',
            'Classification' => 'Pincer Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Metal Claw',
                1 => 'Mud Shot',
            ),
            'Weight' => '60.0 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '098',
                    'Name' => 'Krabby',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Vice Grip',
                1 => 'Water Pulse',
                2 => 'X Scissor',
            ),
            'BaseAttack' => 178,
            'BaseDefense' => 110,
            'BaseStamina' => 168,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        99 =>
        array(
            'Number' => '100',
            'Name' => 'Voltorb',
            'Classification' => 'Ball Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Spark',
                1 => 'Tackle',
            ),
            'Weight' => '10.4 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 100,
                'Name' => 'Voltorb candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '101',
                    'Name' => 'Electrode',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Signal Beam',
                2 => 'Thunderbolt',
            ),
            'BaseAttack' => 102,
            'BaseDefense' => 80,
            'BaseStamina' => 124,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        100 =>
        array(
            'Number' => '101',
            'Name' => 'Electrode',
            'Classification' => 'Ball Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Spark',
                1 => 'Tackle',
            ),
            'Weight' => '66.6 kg',
            'Height' => '1.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '100',
                    'Name' => 'Voltorb',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Hyper Beam',
                2 => 'Thunderbolt',
            ),
            'BaseAttack' => 150,
            'BaseDefense' => 120,
            'BaseStamina' => 174,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        101 =>
        array(
            'Number' => '102',
            'Name' => 'Exeggcute',
            'Classification' => 'Egg Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Poison',
                3 => 'Flying',
                4 => 'Bug',
                5 => 'Ghost',
                6 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
            ),
            'Weight' => '2.5 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 102,
                'Name' => 'Exeggcute candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '103',
                    'Name' => 'Exeggutor',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Psychic',
                2 => 'Seed Bomb',
            ),
            'BaseAttack' => 110,
            'BaseDefense' => 120,
            'BaseStamina' => 132,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        102 =>
        array(
            'Number' => '103',
            'Name' => 'Exeggutor',
            'Classification' => 'Coconut Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Type II' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Poison',
                3 => 'Flying',
                4 => 'Bug',
                5 => 'Ghost',
                6 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '120.0 kg',
            'Height' => '2.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '102',
                    'Name' => 'Exeggcute',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Psychic',
                1 => 'Seed Bomb',
                2 => 'Solar Beam',
            ),
            'BaseAttack' => 232,
            'BaseDefense' => 190,
            'BaseStamina' => 164,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        103 =>
        array(
            'Number' => '104',
            'Name' => 'Cubone',
            'Classification' => 'Lonely Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Slap',
                1 => 'Rock Smash',
            ),
            'Weight' => '6.5 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 104,
                'Name' => 'Cubone candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '105',
                    'Name' => 'Marowak',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bone Club',
                1 => 'Bulldoze',
                2 => 'Dig',
            ),
            'BaseAttack' => 102,
            'BaseDefense' => 100,
            'BaseStamina' => 150,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.10000000000000001,
        ),
        104 =>
        array(
            'Number' => '105',
            'Name' => 'Marowak',
            'Classification' => 'Bone Keeper Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Slap',
                1 => 'Rock Smash',
            ),
            'Weight' => '45.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '104',
                    'Name' => 'Cubone',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bone Club',
                1 => 'Dig',
                2 => 'Earthquake',
            ),
            'BaseAttack' => 140,
            'BaseDefense' => 120,
            'BaseStamina' => 202,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.059999999999999998,
        ),
        105 =>
        array(
            'Number' => '106',
            'Name' => 'Hitmonlee',
            'Classification' => 'Kicking Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Low Kick',
                1 => 'Rock Smash',
            ),
            'Weight' => '49.8 kg',
            'Height' => '1.5 m',
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '107',
                    'Name' => 'Hitmonchan',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Low Sweep',
                1 => 'Stomp',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 148,
            'BaseDefense' => 100,
            'BaseStamina' => 172,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        106 =>
        array(
            'Number' => '107',
            'Name' => 'Hitmonchan',
            'Classification' => 'Punching Pokemon',
            'Type I' =>
            array(
                0 => 'Fighting',
            ),
            'Weaknesses' =>
            array(
                0 => 'Flying',
                1 => 'Psychic',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bullet Punch',
                1 => 'Rock Smash',
            ),
            'Weight' => '50.2 kg',
            'Height' => '1.4 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '106',
                    'Name' => 'Hitmonlee',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Brick Break',
                1 => 'Fire Punch',
                2 => 'Ice Punch',
                3 => 'Thunder Punch',
            ),
            'BaseAttack' => 138,
            'BaseDefense' => 100,
            'BaseStamina' => 204,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        107 =>
        array(
            'Number' => '108',
            'Name' => 'Lickitung',
            'Classification' => 'Licking Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Lick',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '65.5 kg',
            'Height' => '1.2 m',
            'Special Attack(s)' =>
            array(
                0 => 'Hyper Beam',
                1 => 'Power Whip',
                2 => 'Stomp',
            ),
            'BaseAttack' => 126,
            'BaseDefense' => 180,
            'BaseStamina' => 160,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        108 =>
        array(
            'Number' => '109',
            'Name' => 'Koffing',
            'Classification' => 'Poison Gas Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Tackle',
            ),
            'Weight' => '1.0 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 109,
                'Name' => 'Koffing candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '110',
                    'Name' => 'Weezing',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Sludge',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 136,
            'BaseDefense' => 80,
            'BaseStamina' => 142,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        109 =>
        array(
            'Number' => '110',
            'Name' => 'Weezing',
            'Classification' => 'Poison Gas Pokemon',
            'Type I' =>
            array(
                0 => 'Poison',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
                1 => 'Psychic',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Acid',
                1 => 'Tackle',
            ),
            'Weight' => '9.5 kg',
            'Height' => '1.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '109',
                    'Name' => 'Koffing',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dark Pulse',
                1 => 'Shadow Ball',
                2 => 'Sludge Bomb',
            ),
            'BaseAttack' => 190,
            'BaseDefense' => 130,
            'BaseStamina' => 198,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        110 =>
        array(
            'Number' => '111',
            'Name' => 'Rhyhorn',
            'Classification' => 'Spikes Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Type II' =>
            array(
                0 => 'Rock',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
                3 => 'Fighting',
                4 => 'Ground',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Slap',
                1 => 'Rock Smash',
            ),
            'Weight' => '115.0 kg',
            'Height' => '1.0 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 111,
                'Name' => 'Rhyhorn candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '112',
                    'Name' => 'Rhydon',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bulldoze',
                1 => 'Horn Attack',
                2 => 'Stomp',
            ),
            'BaseAttack' => 110,
            'BaseDefense' => 160,
            'BaseStamina' => 116,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        111 =>
        array(
            'Number' => '112',
            'Name' => 'Rhydon',
            'Classification' => 'Drill Pokemon',
            'Type I' =>
            array(
                0 => 'Ground',
            ),
            'Type II' =>
            array(
                0 => 'Rock',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Grass',
                2 => 'Ice',
                3 => 'Fighting',
                4 => 'Ground',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Slap',
                1 => 'Rock Smash',
            ),
            'Weight' => '120.0 kg',
            'Height' => '1.9 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '111',
                    'Name' => 'Rhyhorn',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Earthquake',
                1 => 'Megahorn',
                2 => 'Stone Edge',
            ),
            'BaseAttack' => 166,
            'BaseDefense' => 210,
            'BaseStamina' => 160,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        112 =>
        array(
            'Number' => '113',
            'Name' => 'Chansey',
            'Classification' => 'Egg Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Pound',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '34.6 kg',
            'Height' => '1.1 m',
            'Special Attack(s)' =>
            array(
                0 => 'Dazzling Gleam',
                1 => 'Psybeam',
                2 => 'Psychic',
            ),
            'BaseAttack' => 40,
            'BaseDefense' => 500,
            'BaseStamina' => 60,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        113 =>
        array(
            'Number' => '114',
            'Name' => 'Tangela',
            'Classification' => 'Vine Pokemon',
            'Type I' =>
            array(
                0 => 'Grass',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Ice',
                2 => 'Poison',
                3 => 'Flying',
                4 => 'Bug',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Vine Whip',
            ),
            'Weight' => '35.0 kg',
            'Height' => '1.0 m',
            'Special Attack(s)' =>
            array(
                0 => 'Power Whip',
                1 => 'Sludge Bomb',
                2 => 'Solar Beam',
            ),
            'BaseAttack' => 164,
            'BaseDefense' => 130,
            'BaseStamina' => 152,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        114 =>
        array(
            'Number' => '115',
            'Name' => 'Kangaskhan',
            'Classification' => 'Parent Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Low Kick',
                1 => 'Mud Slap',
            ),
            'Weight' => '80.0 kg',
            'Height' => '2.2 m',
            'Special Attack(s)' =>
            array(
                0 => 'Brick Break',
                1 => 'Earthquake',
                2 => 'Stomp',
            ),
            'BaseAttack' => 142,
            'BaseDefense' => 210,
            'BaseStamina' => 178,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        115 =>
        array(
            'Number' => '116',
            'Name' => 'Horsea',
            'Classification' => 'Dragon Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bubble',
                1 => 'Water Gun',
            ),
            'Weight' => '8.0 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 116,
                'Name' => 'Horsea candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '117',
                    'Name' => 'Seadra',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bubble Beam',
                1 => 'Dragon Pulse',
                2 => 'Flash Cannon',
            ),
            'BaseAttack' => 122,
            'BaseDefense' => 60,
            'BaseStamina' => 100,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.10000000000000001,
        ),
        116 =>
        array(
            'Number' => '117',
            'Name' => 'Seadra',
            'Classification' => 'Dragon Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Dragon Breath',
                1 => 'Water Gun',
            ),
            'Weight' => '25.0 kg',
            'Height' => '1.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '116',
                    'Name' => 'Horsea',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Blizzard',
                1 => 'Dragon Pulse',
                2 => 'Hydro Pump',
            ),
            'BaseAttack' => 176,
            'BaseDefense' => 110,
            'BaseStamina' => 150,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        117 =>
        array(
            'Number' => '118',
            'Name' => 'Goldeen',
            'Classification' => 'Goldfish Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Peck',
            ),
            'Weight' => '15.0 kg',
            'Height' => '0.6 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 118,
                'Name' => 'Goldeen candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '119',
                    'Name' => 'Seaking',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Tail',
                1 => 'Horn Attack',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 112,
            'BaseDefense' => 90,
            'BaseStamina' => 126,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        118 =>
        array(
            'Number' => '119',
            'Name' => 'Seaking',
            'Classification' => 'Goldfish Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Peck',
                1 => 'Poison Jab',
            ),
            'Weight' => '39.0 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '118',
                    'Name' => 'Goldeen',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Drill Run',
                1 => 'Icy Wind',
                2 => 'Megahorn',
            ),
            'BaseAttack' => 172,
            'BaseDefense' => 160,
            'BaseStamina' => 160,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.070000000000000007,
        ),
        119 =>
        array(
            'Number' => '120',
            'Name' => 'Staryu',
            'Classification' => 'Starshape Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Water Gun',
            ),
            'Weight' => '34.5 kg',
            'Height' => '0.8 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 120,
                'Name' => 'Staryu candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '120',
                    'Name' => 'Staryu',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Bubble Beam',
                1 => 'Power Gem',
                2 => 'Swift',
            ),
            'BaseAttack' => 130,
            'BaseDefense' => 60,
            'BaseStamina' => 128,
            'CaptureRate' => 0.40000000000000002,
            'FleeRate' => 0.14999999999999999,
        ),
        120 =>
        array(
            'Number' => '121',
            'Name' => 'Starmie',
            'Classification' => 'Mysterious Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Bug',
                3 => 'Ghost',
                4 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Water Gun',
            ),
            'Weight' => '80.0 kg',
            'Height' => '1.1 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '121',
                    'Name' => 'Starmie',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Hydro Pump',
                1 => 'Power Gem',
                2 => 'Psybeam',
            ),
            'BaseAttack' => 194,
            'BaseDefense' => 120,
            'BaseStamina' => 192,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.059999999999999998,
        ),
        121 =>
        array(
            'Number' => '122',
            'Name' => 'Mr. Mime',
            'Classification' => 'Barrier Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '54.5 kg',
            'Height' => '1.3 m',
            'Special Attack(s)' =>
            array(
                0 => 'Psybeam',
                1 => 'Psychic',
                2 => 'Shadow Ball',
            ),
            'BaseAttack' => 154,
            'BaseDefense' => 80,
            'BaseStamina' => 196,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        122 =>
        array(
            'Number' => '123',
            'Name' => 'Scyther',
            'Classification' => 'Mantis Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Electric',
                2 => 'Ice',
                3 => 'Flying',
                4 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Fury Cutter',
                1 => 'Steel Wing',
            ),
            'Weight' => '56.0 kg',
            'Height' => '1.5 m',
            'Special Attack(s)' =>
            array(
                0 => 'Bug Buzz',
                1 => 'Night Slash',
                2 => 'X Scissor',
            ),
            'BaseAttack' => 176,
            'BaseDefense' => 140,
            'BaseStamina' => 180,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        123 =>
        array(
            'Number' => '124',
            'Name' => 'Jynx',
            'Classification' => 'Humanshape Pokemon',
            'Type I' =>
            array(
                0 => 'Ice',
            ),
            'Type II' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Bug',
                2 => 'Rock',
                3 => 'Ghost',
                4 => 'Dark',
                5 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Frost Breath',
                1 => 'Pound',
            ),
            'Weight' => '40.6 kg',
            'Height' => '1.4 m',
            'Special Attack(s)' =>
            array(
                0 => 'Draining Kiss',
                1 => 'Ice Punch',
                2 => 'Psyshock',
            ),
            'BaseAttack' => 172,
            'BaseDefense' => 130,
            'BaseStamina' => 134,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        124 =>
        array(
            'Number' => '125',
            'Name' => 'Electabuzz',
            'Classification' => 'Electric Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Low Kick',
                1 => 'Thunder Shock',
            ),
            'Weight' => '30.0 kg',
            'Height' => '1.1 m',
            'Special Attack(s)' =>
            array(
                0 => 'Thunder',
                1 => 'Thunder Punch',
                2 => 'Thunderbolt',
            ),
            'BaseAttack' => 198,
            'BaseDefense' => 130,
            'BaseStamina' => 160,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        125 =>
        array(
            'Number' => '126',
            'Name' => 'Magmar',
            'Classification' => 'Spitfire Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
                1 => 'Karate Chop',
            ),
            'Weight' => '44.5 kg',
            'Height' => '1.3 m',
            'Special Attack(s)' =>
            array(
                0 => 'Fire Blast',
                1 => 'Fire Punch',
                2 => 'Flamethrower',
            ),
            'BaseAttack' => 214,
            'BaseDefense' => 130,
            'BaseStamina' => 158,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        126 =>
        array(
            'Number' => '127',
            'Name' => 'Pinsir',
            'Classification' => 'Stagbeetle Pokemon',
            'Type I' =>
            array(
                0 => 'Bug',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Flying',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Fury Cutter',
                1 => 'Rock Smash',
            ),
            'Weight' => '55.0 kg',
            'Height' => '1.5 m',
            'Special Attack(s)' =>
            array(
                0 => 'Submission',
                1 => 'Vice Grip',
                2 => 'X Scissor',
            ),
            'BaseAttack' => 184,
            'BaseDefense' => 130,
            'BaseStamina' => 186,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        127 =>
        array(
            'Number' => '128',
            'Name' => 'Tauros',
            'Classification' => 'Wild Bull Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Tackle',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '88.4 kg',
            'Height' => '1.4 m',
            'Special Attack(s)' =>
            array(
                0 => 'Earthquake',
                1 => 'Horn Attack',
                2 => 'Iron Head',
            ),
            'BaseAttack' => 148,
            'BaseDefense' => 150,
            'BaseStamina' => 184,
            'CaptureRate' => 0.23999999999999999,
            'FleeRate' => 0.089999999999999997,
        ),
        128 =>
        array(
            'Number' => '129',
            'Name' => 'Magikarp',
            'Classification' => 'Fish Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Splash',
            ),
            'Weight' => '10.0 kg',
            'Height' => '0.9 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 400,
                'Family' => 129,
                'Name' => 'Magikarp candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '130',
                    'Name' => 'Gyarados',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Struggle',
            ),
            'BaseAttack' => 42,
            'BaseDefense' => 40,
            'BaseStamina' => 84,
            'CaptureRate' => 0.56000000000000005,
            'FleeRate' => 0.14999999999999999,
        ),
        129 =>
        array(
            'Number' => '130',
            'Name' => 'Gyarados',
            'Classification' => 'Atrocious Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Dragon Breath',
            ),
            'Weight' => '235.0 kg',
            'Height' => '6.5 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '129',
                    'Name' => 'Magikarp',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dragon Pulse',
                1 => 'Hydro Pump',
                2 => 'Twister',
            ),
            'BaseAttack' => 192,
            'BaseDefense' => 190,
            'BaseStamina' => 196,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.070000000000000007,
        ),
        130 =>
        array(
            'Number' => '131',
            'Name' => 'Lapras',
            'Classification' => 'Transport Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Type II' =>
            array(
                0 => 'Ice',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Frost Breath',
                1 => 'Ice Shard',
            ),
            'Weight' => '220.0 kg',
            'Height' => '2.5 m',
            'Special Attack(s)' =>
            array(
                0 => 'Blizzard',
                1 => 'Dragon Pulse',
                2 => 'Ice Beam',
            ),
            'BaseAttack' => 186,
            'BaseDefense' => 260,
            'BaseStamina' => 190,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        131 =>
        array(
            'Number' => '132',
            'Name' => 'Ditto',
            'Classification' => 'Transform Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Pound',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Struggle',
            ),
            'Weight' => '4.0 kg',
            'Height' => '0.3 m',
            'BaseAttack' => 110,
            'BaseDefense' => 96,
            'BaseStamina' => 110,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.10000000000000001,
        ),
        132 =>
        array(
            'Number' => '133',
            'Name' => 'Eevee',
            'Classification' => 'Evolution Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Tackle',
            ),
            'Weight' => '6.5 kg',
            'Height' => '0.3 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 133,
                'Name' => 'Eevee candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '134',
                    'Name' => 'Vaporeon',
                ),
                1 =>
                array(
                    'Number' => '135',
                    'Name' => 'Jolteon',
                ),
                2 =>
                array(
                    'Number' => '136',
                    'Name' => 'Flareon',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Dig',
                2 => 'Swift',
            ),
            'BaseAttack' => 114,
            'BaseDefense' => 110,
            'BaseStamina' => 128,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.10000000000000001,
        ),
        133 =>
        array(
            'Number' => '134',
            'Name' => 'Vaporeon',
            'Classification' => 'Bubble Jet Pokemon',
            'Type I' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Water Gun',
            ),
            'Weight' => '29.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '133',
                    'Name' => 'Eevee',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Tail',
                1 => 'Hydro Pump',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 186,
            'BaseDefense' => 260,
            'BaseStamina' => 168,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.059999999999999998,
        ),
        134 =>
        array(
            'Number' => '135',
            'Name' => 'Jolteon',
            'Classification' => 'Lightning Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Thunder Shock',
            ),
            'Weight' => '24.5 kg',
            'Height' => '0.8 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '133',
                    'Name' => 'Eevee',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Thunder',
                2 => 'Thunderbolt',
            ),
            'BaseAttack' => 192,
            'BaseDefense' => 130,
            'BaseStamina' => 174,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.059999999999999998,
        ),
        135 =>
        array(
            'Number' => '136',
            'Name' => 'Flareon',
            'Classification' => 'Flame Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Ground',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
            ),
            'Weight' => '25.0 kg',
            'Height' => '0.9 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '133',
                    'Name' => 'Eevee',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Fire Blast',
                1 => 'Flamethrower',
                2 => 'Heat Wave',
            ),
            'BaseAttack' => 238,
            'BaseDefense' => 130,
            'BaseStamina' => 178,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.059999999999999998,
        ),
        136 =>
        array(
            'Number' => '137',
            'Name' => 'Porygon',
            'Classification' => 'Virtual Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Quick Attack',
                1 => 'Tackle',
            ),
            'Weight' => '36.5 kg',
            'Height' => '0.8 m',
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Psybeam',
                2 => 'Signal Beam',
            ),
            'BaseAttack' => 156,
            'BaseDefense' => 130,
            'BaseStamina' => 158,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        137 =>
        array(
            'Number' => '138',
            'Name' => 'Omanyte',
            'Classification' => 'Spiral Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Water Gun',
            ),
            'Weight' => '7.5 kg',
            'Height' => '0.4 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 138,
                'Name' => 'Omanyte candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '139',
                    'Name' => 'Omastar',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Brine',
                2 => 'Rock Tomb',
            ),
            'BaseAttack' => 132,
            'BaseDefense' => 70,
            'BaseStamina' => 160,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        138 =>
        array(
            'Number' => '139',
            'Name' => 'Omastar',
            'Classification' => 'Spiral Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Rock Throw',
                1 => 'Water Gun',
            ),
            'Weight' => '35.0 kg',
            'Height' => '1.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '138',
                    'Name' => 'Omanyte',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Hydro Pump',
                2 => 'Rock Slide',
            ),
            'BaseAttack' => 180,
            'BaseDefense' => 140,
            'BaseStamina' => 202,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.050000000000000003,
        ),
        139 =>
        array(
            'Number' => '140',
            'Name' => 'Kabuto',
            'Classification' => 'Shellfish Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Mud Shot',
                1 => 'Scratch',
            ),
            'Weight' => '11.5 kg',
            'Height' => '0.5 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 50,
                'Family' => 140,
                'Name' => 'Kabuto candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '141',
                    'Name' => 'Kabutops',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Aqua Jet',
                2 => 'Rock Tomb',
            ),
            'BaseAttack' => 148,
            'BaseDefense' => 60,
            'BaseStamina' => 142,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        140 =>
        array(
            'Number' => '141',
            'Name' => 'Kabutops',
            'Classification' => 'Shellfish Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Water',
            ),
            'Weaknesses' =>
            array(
                0 => 'Electric',
                1 => 'Grass',
                2 => 'Fighting',
                3 => 'Ground',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Fury Cutter',
                1 => 'Mud Shot',
            ),
            'Weight' => '40.5 kg',
            'Height' => '1.3 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '140',
                    'Name' => 'Kabuto',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Stone Edge',
                2 => 'Water Pulse',
            ),
            'BaseAttack' => 190,
            'BaseDefense' => 120,
            'BaseStamina' => 190,
            'CaptureRate' => 0.12,
            'FleeRate' => 0.050000000000000003,
        ),
        141 =>
        array(
            'Number' => '142',
            'Name' => 'Aerodactyl',
            'Classification' => 'Fossil Pokemon',
            'Type I' =>
            array(
                0 => 'Rock',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Electric',
                2 => 'Ice',
                3 => 'Rock',
                4 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Bite',
                1 => 'Steel Wing',
            ),
            'Weight' => '59.0 kg',
            'Height' => '1.8 m',
            'Special Attack(s)' =>
            array(
                0 => 'Ancient Power',
                1 => 'Hyper Beam',
                2 => 'Iron Head',
            ),
            'BaseAttack' => 182,
            'BaseDefense' => 160,
            'BaseStamina' => 162,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        142 =>
        array(
            'Number' => '143',
            'Name' => 'Snorlax',
            'Classification' => 'Sleeping Pokemon',
            'Type I' =>
            array(
                0 => 'Normal',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fighting',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Lick',
                1 => 'Zen Headbutt',
            ),
            'Weight' => '460.0 kg',
            'Height' => '2.1 m',
            'Special Attack(s)' =>
            array(
                0 => 'Body Slam',
                1 => 'Earthquake',
                2 => 'Hyper Beam',
            ),
            'BaseAttack' => 180,
            'BaseDefense' => 320,
            'BaseStamina' => 180,
            'CaptureRate' => 0.16,
            'FleeRate' => 0.089999999999999997,
        ),
        143 =>
        array(
            'Number' => '144',
            'Name' => 'Articuno',
            'Classification' => 'Freeze Pokemon',
            'Type I' =>
            array(
                0 => 'Ice',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Fire',
                1 => 'Electric',
                2 => 'Rock',
                3 => 'Steel',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Frost Breath',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Blizzard',
                1 => 'Ice Beam',
                2 => 'Icy Wind',
            ),
            'Weight' => '55.4 kg',
            'Height' => '1.7 m',
            'BaseAttack' => 198,
            'BaseDefense' => 180,
            'BaseStamina' => 242,
            'CaptureRate' => 0,
            'FleeRate' => 0.10000000000000001,
        ),
        144 =>
        array(
            'Number' => '145',
            'Name' => 'Zapdos',
            'Classification' => 'Electric Pokemon',
            'Type I' =>
            array(
                0 => 'Electric',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ice',
                1 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Thunder Shock',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Discharge',
                1 => 'Thunder',
                2 => 'Thunderbolt',
            ),
            'Weight' => '52.6 kg',
            'Height' => '1.6 m',
            'BaseAttack' => 232,
            'BaseDefense' => 180,
            'BaseStamina' => 194,
            'CaptureRate' => 0,
            'FleeRate' => 0.10000000000000001,
        ),
        145 =>
        array(
            'Number' => '146',
            'Name' => 'Moltres',
            'Classification' => 'Flame Pokemon',
            'Type I' =>
            array(
                0 => 'Fire',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Water',
                1 => 'Electric',
                2 => 'Rock',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Ember',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Fire Blast',
                1 => 'Flamethrower',
                2 => 'Heat Wave',
            ),
            'Weight' => '60.0 kg',
            'Height' => '2.0 m',
            'BaseAttack' => 242,
            'BaseDefense' => 180,
            'BaseStamina' => 194,
            'CaptureRate' => 0,
            'FleeRate' => 0.10000000000000001,
        ),
        146 =>
        array(
            'Number' => '147',
            'Name' => 'Dratini',
            'Classification' => 'Dragon Pokemon',
            'Type I' =>
            array(
                0 => 'Dragon',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ice',
                1 => 'Dragon',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Dragon Breath',
            ),
            'Weight' => '3.3 kg',
            'Height' => '1.8 m',
            'Next Evolution Requirements' =>
            array(
                'Amount' => 25,
                'Family' => 147,
                'Name' => 'Dratini candies',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Tail',
                1 => 'Twister',
                2 => 'Wrap',
            ),
            'BaseAttack' => 128,
            'BaseDefense' => 82,
            'BaseStamina' => 110,
            'CaptureRate' => 0.32000000000000001,
            'FleeRate' => 0.089999999999999997,
        ),
        147 =>
        array(
            'Number' => '148',
            'Name' => 'Dragonair',
            'Classification' => 'Dragon Pokemon',
            'Type I' =>
            array(
                0 => 'Dragon',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ice',
                1 => 'Dragon',
                2 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Dragon Breath',
            ),
            'Weight' => '16.5 kg',
            'Height' => '4.0 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '147',
                    'Name' => 'Dratini',
                ),
            ),
            'Next Evolution Requirements' =>
            array(
                'Amount' => 100,
                'Family' => 147,
                'Name' => 'Dratini candies',
            ),
            'Next evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '149',
                    'Name' => 'Dragonite',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Aqua Tail',
                1 => 'Dragon Pulse',
                2 => 'Wrap',
            ),
            'BaseAttack' => 170,
            'BaseDefense' => 122,
            'BaseStamina' => 152,
            'CaptureRate' => 0.080000000000000002,
            'FleeRate' => 0.059999999999999998,
        ),
        148 =>
        array(
            'Number' => '149',
            'Name' => 'Dragonite',
            'Classification' => 'Dragon Pokemon',
            'Type I' =>
            array(
                0 => 'Dragon',
            ),
            'Type II' =>
            array(
                0 => 'Flying',
            ),
            'Weaknesses' =>
            array(
                0 => 'Ice',
                1 => 'Rock',
                2 => 'Dragon',
                3 => 'Fairy',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Dragon Breath',
                1 => 'Steel Wing',
            ),
            'Weight' => '210.0 kg',
            'Height' => '2.2 m',
            'Previous evolution(s)' =>
            array(
                0 =>
                array(
                    'Number' => '147',
                    'Name' => 'Dratini',
                ),
                1 =>
                array(
                    'Number' => '148',
                    'Name' => 'Dragonair',
                ),
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dragon Claw',
                1 => 'Dragon Pulse',
                2 => 'Hyper Beam',
            ),
            'BaseAttack' => 250,
            'BaseDefense' => 182,
            'BaseStamina' => 212,
            'CaptureRate' => 0.040000000000000001,
            'FleeRate' => 0.050000000000000003,
        ),
        149 =>
        array(
            'Number' => '150',
            'Name' => 'Mewtwo',
            'Classification' => 'Genetic Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Confusion',
                1 => 'Psycho Cut',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Hyper Beam',
                1 => 'Psychic',
                2 => 'Shadow Ball',
            ),
            'Weight' => '122.0 kg',
            'Height' => '2.0 m',
            'BaseAttack' => 284,
            'BaseDefense' => 212,
            'BaseStamina' => 202,
            'CaptureRate' => 0,
            'FleeRate' => 0.10000000000000001,
        ),
        150 =>
        array(
            'Number' => '151',
            'Name' => 'Mew',
            'Classification' => 'New Species Pokemon',
            'Type I' =>
            array(
                0 => 'Psychic',
            ),
            'Weaknesses' =>
            array(
                0 => 'Bug',
                1 => 'Ghost',
                2 => 'Dark',
            ),
            'Fast Attack(s)' =>
            array(
                0 => 'Pound',
            ),
            'Special Attack(s)' =>
            array(
                0 => 'Dragon Pulse',
                1 => 'Earthquake',
                2 => 'Fire Blast',
                3 => 'Hurricane',
                4 => 'Hyper Beam',
                5 => 'Moonblast',
                6 => 'Psychic',
                7 => 'Solar Beam',
                8 => 'Thunder',
            ),
            'Weight' => '4.0 kg',
            'Height' => '0.4 m',
            'BaseAttack' => 220,
            'BaseDefense' => 200,
            'BaseStamina' => 220,
            'CaptureRate' => 0,
            'FleeRate' => 0.10000000000000001,
        ),
    );

}
