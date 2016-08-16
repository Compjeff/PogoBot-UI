<?php

class ServiceHandler {
    
    private $_mongoClient;
    private $_mongoDb;
    
    public function __construct($config) {
        $uri = 'mongodb://'.$config['mongodb']['host'].':'.$config['mongodb']['port'];
        $this->_mongoClient = new MongoClient($uri);
        $this->_mongoDb = $this->_mongoClient->pokemongo_bot;
    }
    
    public function getForts($input) {
        if ( empty($input['bounds']) ) {
            error_log('No bounds');
            return [];
        }
        return array_merge($this->getGyms($input),$this->getPokestops($input));
    }
    
    public function getGyms($input) {
        $result = [];
        if ( ! empty($input['bounds']) ) {
            $bounds = $input['bounds'];
            $coll = $this->_mongoDb->gyms;
            $result = $this->_findWithBounds($coll, $bounds);
        }
        return ['gyms'=>$result];
    }
    
    public function getPokestops($input) {
        $result = [];
        if ( ! empty($input['bounds']) ) {
            $bounds = $input['bounds'];
            $coll = $this->_mongoDb->pokestops;
            $result = $this->_findWithBounds($coll, $bounds);
        }
        return ['pokestops'=>$result];
    }
    
    private function _findWithBounds($coll, $bounds) {
        $cursor = $coll->find([
            'loc' => [
                '$geoWithin'=> [
                    '$box' => [
                        [floatval($bounds[0]), floatval($bounds[1])],
                        [floatval($bounds[2]), floatval($bounds[3])]
                    ]
                ]
            ]
        ]);
        $result = [];
        foreach($cursor as $doc) {
            $result[] = $doc;
        }
        return $result;
    }
}

