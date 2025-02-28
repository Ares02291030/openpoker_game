<?php

    //@ini_set('zlib.output_compression',0);
    //@ini_set('implicit_flush',1);
    //@ob_end_clean();
    //set_time_limit(0);
    @ini_set('memory_limit',234217728);


include_once 'autoload.php';

$t = new System_Template_Template('/home/alternativmedia/public_html/openpoker/views');
$t->set('table.php');
$t->show($t->load());

$helper = new System_Helper_Html_Output;

$deck = new Deck;
//$deck_new = new DeckNew;
//$cards_new = $deck_new->getDeck();
//$helper->print_pre($cards_new);

$dealer = new Dealer;

//echo '<br><u>Showing fresh un-shuffled deck</u><br>';
//$dealer->showDeck($deck);


$dealer->shuffleDeck($deck);

//echo '<br><br><u>Showing shuffled deck</u><br>';
//$dealer->showDeck($deck);


$player_0 = new Player('PunkePanda', 1500);       
$player_1 = new Player('ALittleK', 1500);         
$player_2 = new Player('PokerPrincess', 1500);    
$player_3 = new Player('FunkyAA', 1500);          
$player_4 = new Player('AA2KK', 1500);            
$player_5 = new Player('SmashingAces', 1500);     
$player_6 = new Player('BigKings', 1500);         
$player_7 = new Player('NoMoreTTs', 1500);        
$player_8 = new Player('Dr AllIn', 1500);         
$player_9 = new Player('FlushOfSpades', 1500);  


$players = array($player_0, 
                 $player_1, 
                 $player_2, 
                 $player_3, 
                 $player_4, 
                 $player_5,
                 $player_6,
                 $player_7,
                 $player_8,
                 $player_9
                );


$table = new Table(array()); // If paramater array is not empty, seating all the players in the players array to the table


$table->seatPlayer($player_0);
$table->seatPlayer($player_1);
$table->seatPlayer($player_2);
$table->seatPlayer($player_3);
$table->seatPlayer($player_4);
$table->seatPlayer($player_5);
$table->seatPlayer($player_6);
$table->seatPlayer($player_7);
$table->seatPlayer($player_8);
$table->seatPlayer($player_9);


$player_0->setHand($player_0_hand = $dealer->dealPlayer($deck, $player_0));
$player_1->setHand($player_1_hand = $dealer->dealPlayer($deck, $player_1));
$player_2->setHand($player_2_hand = $dealer->dealPlayer($deck, $player_2));
$player_3->setHand($player_3_hand = $dealer->dealPlayer($deck, $player_3));
$player_4->setHand($player_4_hand = $dealer->dealPlayer($deck, $player_4));
$player_5->setHand($player_5_hand = $dealer->dealPlayer($deck, $player_5));
$player_6->setHand($player_6_hand = $dealer->dealPlayer($deck, $player_6));
$player_7->setHand($player_7_hand = $dealer->dealPlayer($deck, $player_7));
$player_8->setHand($player_8_hand = $dealer->dealPlayer($deck, $player_8));
$player_9->setHand($player_9_hand = $dealer->dealPlayer($deck, $player_9));

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




?>