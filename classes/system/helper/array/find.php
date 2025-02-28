<?php

class System_Helper_Array_Find {

    function __construct() {
        
    }

    function getdupes($array){
        if (!is_array($array)) return false;
        $found = array();
        foreach($array as $key => $value){
        if (!in_array($value, $found)){
        unset($array[$key]);
        $found[] = $value;
        }
        }
        return $array;
        }
        
        function hasdupes($array){
        if (!is_array($array)) return false;
        $found = array();
        foreach($array as $key => $value){
        if (!in_array($value, $found)){
        unset($array[$key]);
        $found[] = $value;
        } else {
        return true;
        }
        }
        return false;
    }          
}


?>
