<?php

class System_Helper_Html_Output {
    
    public function __construct() {
        ;
    }
    
    
    public static function print_pre($object) {
        echo '<pre>';
        print_r($object);
        echo '</pre>';
    }
    
    public static function debug_start() {
        echo '<div class="debug">';
        echo '<pre>';
    }
    public static function debug_stop() {
        echo '</pre>';
        echo '</div>';
    }    
}

?>
