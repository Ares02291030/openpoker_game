<?php


class System_Helper_Timedate {
    
    public function __construct() {
        ;
    }


public function getTime()
    {
    $a = explode (' ',microtime());
    return(double) $a[0] + $a[1];
    }
}
?>
