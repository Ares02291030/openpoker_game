<?php

class Registry {
    
    private static $object = array();
    
    private function __construct() {
        
    }
    
    public static function Set($name, $object) {
        self::$object[$name] = $object;   
    }
    
    public static function &Get($name) {
        return self::$object[$name];
    }
    
    public static function Save($object) {
        Data::Save($object);
    }
    
    public static function Load($name) {
        return Data::loadNamed($name);
    }
}


?>
