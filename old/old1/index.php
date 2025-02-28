<?php
include_once 'autoload.php';
    
$request = $_REQUEST['request'];



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
        $table = new Table(array()); // Optional array - If paramater array is not empty, seating all the players in the players array to the table
        $dealer = new Dealer;
        $deck = new Deck;

        
        // ##################################### Initializing Action Handling ################################
        $action = new Action($deck, $dealer, $table, $players, $request);

        $action->shuffleCards();
        //$action->newGame($players);
        $action->newHand();
        
if(!$request) { 
    // ##################################### Loading Game Interface  #####################################
    $t = new System_Template_Template('/home/alternativmedia/public_html/openpoker/views/table2');
    $t->set('table.php');
    $t->add('profile_photos', array(
            'http://alternativmedia.no/openpoker/images/profile/player_0.jpg',
            'http://alternativmedia.no/openpoker/images/profile/player_1.jpg',
            'http://alternativmedia.no/openpoker/images/profile/player_2.jpg',
            'http://alternativmedia.no/openpoker/images/profile/player_3.jpg',
            'http://alternativmedia.no/openpoker/images/profile/player_4.jpg',
            'http://alternativmedia.no/openpoker/images/profile/player_5.jpg'
            ));
    $t->show($t->load());
        
} else { 

        // ##################################### Setting action_ trigger variables  ##########################
        if($request == 'new_game') { $action_new_game = true; } 
        if($request == 'new_hand') { $action_new_hand = true; } 
        if($request == 'deal_flop') { $action_deal_flop = true; } 
        if($request == 'deal_turn') { $action_deal_turn = true; }  
        if($request == 'deal_river') { $action_deal_river = true; }  
        if($request == 'show_hand') { $action_show_hand = true; } 
        if($request == 'show_profile_photo') { $action_show_profile_picture = true; }  

        // ##################################### Do Action - TRUE or FALSE ###################################
        if($action_new_game) { $action->newGame($players); }
        if($action_new_hand) { $action->newHand(); }
        if($action_deal_flop == true) { $action->dealFlop(); }
        if($action_deal_turn == true) { $action->dealTurn(); }
        if($action_deal_river) { $action->dealRiver(); }
        if($action_show_hand) { $action->showHand($player); }
        if($action_show_profile_picture) { $action->showProfilePhoto($player); }
        
        //echo $request;
}

//$helper = new System_Helper_Html_Output;

/*
//echo '<br><br><u>Rest of the cards in the deck:</u><br>';
//$dealer->showDeck($deck);

echo '<br><br>';
echo '<br><br><u>Burns one card:</u><br>';
echo '<img src="images/cards/b1fv.png"></b>';
$dealer->dealBurn($deck);

echo '<br><br><u>Here comes the flop:</u><br>';

$flop_cards = $dealer->dealFlop($deck, $table);
$table->showFlop($flop_cards);


echo '<br><br><u>Burns one card:</u><br>';
echo '<img src="images/cards/b1fv.png"></b>';
$dealer->dealBurn($deck);


echo '<br><br><u>Dealing turn card:</u><br>';

$turn_card = $dealer->dealTurn($deck, $table);
//sleep(2);
$table->showTurn($turn_card);

echo '<br><br><u>Burns one card:</u><br>';
echo '<img src="images/cards/b1fv.png"></b>';
$dealer->dealBurn($deck);


echo '<br><br><u>And the final card:</u><br>';

$river_card = $dealer->dealRiver($deck, $table);
//sleep(2);
$table->showRiver($river_card);

echo '<br><br><u>Complete showdown:</u><br>';
$table->showFlop($flop_cards); echo '&nbsp;&nbsp;'; 
$table->showTurn($turn_card);  echo '&nbsp;&nbsp;'; ;
$table->showRiver($river_card);
echo '<br><br>';



for($i=0; $i < count($players); $i++) {
    $match = $dealer->getMatch($table->getShowdown($i));
    $players[$i]->setScore($match->getScore());
    $players[$i]->showName();  echo '<br>';  
    $players[$i]->showHand();  echo '<br>';
    $players[$i]->showScore(); echo '<br>';   
    $players[$i]->showStack(); echo '<br>';
    
    echo'<br><br>';
}

$winner_player = $dealer->getWinner($players);


$winner_name = $winner_player->getName();
$winner_hand = $dealer->getWinnerHand($winner_player);

echo '<h3>The winner is <h1>' . $winner_name . '</h1>';
echo ' with: ' . $match->getText(); '</h3>';
echo '<h2>Winner hand: ' . $deck->getCardsText($winner_player->getHand()) . '</h2>';


//echo '<br><br><u>Rest of the cards in the deck:</u><br>';
//$dealer->showDeck($deck);
*/



?>
