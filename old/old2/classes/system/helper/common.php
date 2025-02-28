<?php

class System_Helper_Common {
 
    static public function var_name($search) {
        $def = $GLOBALS;
        foreach( $def as $k=>$d )
        {
                if( is_string( $GLOBALS[$k] ) && $d==$search )
                {
                        return $k;
                }
        }
        return false;
    }
}
?>
