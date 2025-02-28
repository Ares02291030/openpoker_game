<?php
//error_reporting(11);
session_start();
if(empty($_REQUEST)) { // Starting new game if empty(request) string
    $_SESSION = null;
    echo 'Starting new game!';
}

include 'autoload.php';


// Checking if the script got an $_REQUEST from client interface
if(isset($_REQUEST['request'])) { $request = $_REQUEST['request']; }
if(isset($request) && !empty($request)) {
    if(!empty ($request)) { $state = 'request'; }
    } else { $state = 'init'; }


switch($state) {
    case 'init': { // Starting new table
        // ##################################### Loading Game Interface  #####################################
        $t_table = new System_Template_Template('views/table2');
        $t_table->set('table_view.php');
        $t_table->show($t_table->load());
        // ##################################### Initializing Game Stuff #####################################

        // Starting a new table object
        $table = new Table(array()); // Optional array - If paramater array is not empty, seating all the players in the players array to the table

        // Saving the Table object for use in other files (Ex: gateway.php which interact with the client interface)
        Registry::Save($table);
    } break;

    case 'request': { // The client interface requests some action from the server. Loading gateway.php which handles the action requested by the user client interface
        include 'gateway.php';
    } break;
    case 'game_action': {
        $player_action = true;
    } break;

    default : {
        echo '<br>The game is being quit..Bye!!<br>';
    } break;
}



if($player_action) {
        // ##################################### Loading User Action Interface  #####################################
        $t_buttons = new System_Template_Template('views/table2');
        $t_buttons->set('buttons_view.php');
        $t_buttons->show($t_buttons->load());
}


?>
