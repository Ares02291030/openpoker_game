<?php

class Data {
    
    static public function getSerialized($object) {
        return serialize($object);
    }
    
    static public function getUnSerialized($string) {
        return unserialize($string);
    }  
    
    static public function registerSession($string, $object_name) {
        session_start();
        $_SESSION[(string)$object_name] = $string;
    }      

    static public function Save($object) {
        $string = self::getSerialized($object);
        //echo get_class($object);
        if(is_object($object)) {
            self::registerSession($string, get_class($object));
        } else {
            self::registerSession($string, ('players'));
            //echo System_Helper_Common::var_name($object);
            
        } 
        return $string;
    }

    static public function Load($string) {
        return self::getUnSerialized($string);
    }
    static public function loadNamed($name) {
        //echo '<br>Named:' . $name;
        $string = $_SESSION[$name];
       // echo '<br>String:' . $string;
        return self::getUnSerialized($string);
    }
}


?>
