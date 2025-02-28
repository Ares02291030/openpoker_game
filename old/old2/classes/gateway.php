<?php
include_once 'classes/action.php';

class Gateway { 
    
    private $request;
    
    function __construct($request) {
        $this->request = (string)$request;
    }   

    public function sendPlayerInfo() {
        
        if($request == 'name') {
            parent::dealFlop();
        } else if($request == 'score') {
            $data = 'Score: ';
        }
        else if($request == 'stack') {
            $data = 'Stack: ';
        }
        else if($request == 'card') {
            $data = 'Cards: ';
        }   
        return $data;
    }  
    
    public function sendFlop() {
        parent::dealFlop();
    }

}
?>
