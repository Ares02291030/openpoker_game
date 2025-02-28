<?php
//error_reporting(11); 
session_start();

include 'autoload.php';


// Checking if the script got an $_REQUEST from another file 
if(isset($_REQUEST['request'])) { $request = $_REQUEST['request']; }
if(isset($request) && !empty($request)) {
    if(!empty ($request)) { $state = 'request'; } 
    } else { $state = 'init'; }


switch($state) {
    case 'init': {
            //echo '<br>Initialising game........<br>';
            // ##################################### Loading Game Interface  #####################################
            $t = new System_Template_Template('/home/alternativmedia/public_html/openpoker/views/table2');
            $t->set('table_view.php');
            $t->show($t->load()); 

        // #################################### Setting up players default ##########
        $player_0 = new Player('PunkePanda', 1500);       
        $player_1 = new Player('ALittleK', 1500);         
        $player_2 = new Player('PokerPrincess', 1500);    
        $player_3 = new Player('FunkyAA', 1500);          
        $player_4 = new Player('AA2KK', 1500);            
        $player_5 = new Player('SmashingAces', 1500);     
        $player_6 = new Player('BigKings', 1500);         

        $players = array($player_0, 
                         $player_1, 
                         $player_2, 
                         $player_3, 
                         $player_4, 
                         $player_5
                         );        

        $player = 0; // The player in action 

        // ##################################### Initializing Game Stuff #####################################
        $deck = new Deck;
        $table = new Table(array()); // Optional array - If paramater array is not empty, seating all the players in the players array to the table
        $dealer = new Dealer;
        $action = new Action($deck, $dealer, $table, $players, $request);

         // To be fixed. Need a function for getting a var_name
        echo '<br>Players variable is:' . System_Helper_Common::var_name($players);

    // Saving (serializing to $_SESSION) objects for global use
        //Data::Save($deck); // This gets saved in the Deck objects itself
        //Data::Save($dealer);
        //Data::Save($table); 
        Data::Save($players);    
    } break;

    case 'request': {
        include 'gateway.php';
    } break;
    default : {
        echo '<br>The game is being quit..Bye!!<br>';
    } break;
}



?>
