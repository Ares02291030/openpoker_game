<?php

class Test {

    private $object;
    
    public function __construct($object) {
        $this->object = serialize($object);
    }
    public function showTest() {
        echo '<br />' . $this->object; 
    }
}
?>
