<?php
include_once 'classes/action.php';

class Gateway extends Action{ 
    
    function __construct() {
        
    }   

    public function sendPlayerInfo($request) {
        
        if($request == 'name') {
            //$data = 'Name: ';
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

}
?>
