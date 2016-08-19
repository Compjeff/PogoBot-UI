<?php

class Pokemon {
    
    static private $_fulllist = null;
    static private $_grouped = null;
    
    public static function & getGroupedData() {
        if ( static::$_grouped === null ) {
            static::$_grouped = [];
            foreach ( static::getFullList() as $item ) {
                if ( $item->isBase() ) {
                    static::$_grouped[] = [$item];
                } else {
                    static::$_grouped[count(static::$_grouped) - 1][] = $item;
                }
            }
        }
        return static::$_grouped;
    }
    
    public static function & getFullList() {
        if ( static::$_fulllist === null ) {
            static::$_fulllist = [];
            $fileName = dirname(__DIR__) . '/data/pokemon.json';
            $json = file_get_contents($fileName);
            foreach(json_decode($json, true) as $info) {
                $pokemon = new Pokemon($info);
                static::$_fulllist[$pokemon->getId()] = $pokemon;
            }
        }
        return static::$_fulllist;
    }
    
    private $_id;
    private $_info;
    
    public function __construct($info) {
        $this->_id = intval($info['Number']);
        $this->_info = $info;
    }
    
    public function getId() {
        return $this->_id;
    }
    
    public function isBase() {
        return empty($this->_info['Previous evolution(s)']);
    }
    
    public function getName() {
        return $this->_info['Name'];
    }
}