<?php

class System_Helper_Html_Output {
    
    public function __construct() {
        ;
    }
    
    
    static function print_pre($object) {
        echo '<pre>';
        print_r($object);
        echo '</pre>';
    }
}

?>
