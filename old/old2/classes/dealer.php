<?php

class Dealer {
    
    function __construct() {
        
    }
   
    public function checkDeck($deck) {
        if(count($deck->getDeck()) > 0) {
            return true;
        } else {
            echo 'No more cards in the deck. "Deal a new hand"!'; die();
        }
    }
    
    public function shuffleDeck (Deck $deck) {            
        if($this->checkDeck($deck)) {
            $cards = $deck->getDeck();
            shuffle($cards);
        $deck->setDeck($cards);
        }
    }
              
    public function dealPlayer(Deck $deck, Player $player) {
        if($this->checkDeck($deck)) {
            $cards = $deck->getDeck();
            $two_cards = array(0 => $cards[0], 1 => $cards[1]);
            $cards_left = array_splice($cards, 2);     
            $deck->setDeck($cards_left);
            $player->setHand($two_cards);
            return $two_cards;
        }
    }    
    
    public function dealBurn(Deck $deck) {
        if($this->checkDeck($deck)) {
        $cards = $deck->getDeck();
        $burn_card = array(0 => $cards[0]);
        $cards_left = array_splice($cards, 1);       
        $deck->setDeck($cards_left);
        return $flop_cards;
        }
    }        
    
    public function dealFlop(Deck $deck, Table $table) {
        if($this->checkDeck($deck)) {
        $cards = $deck->getDeck();
        $flop_cards = array(0 => $cards[0], 1 => $cards[1], 2 => $cards[2]);
        $cards_left = array_splice($cards, 3);
        $deck->setDeck($cards_left);
        $table->setFlop($flop_cards);
        return $flop_cards;
        }
    }        
    
    public function dealTurn(Deck $deck, Table $table) {
        if($this->checkDeck($deck)) {        
            $cards = $deck->getDeck();
            $turn_card = array(0 => $cards[0]);
            $cards_left = array_splice($cards, 1);
            $deck->setDeck($cards_left);
            $table->setTurn($turn_card);
        return $turn_card;
        }
    }            
    
    public function dealRiver(Deck $deck, Table $table) {
        if($this->checkDeck($deck)) {        
            $cards = $deck->getDeck();
            $river_card = array(0 => $cards[0]);
            $cards_left = array_splice($cards, 1);
            $deck->setDeck($cards_left);
            $table->setRiver($river_card);
            return $river_card;
        }
    }
    
    public function getMatch($showdown) {
        $match = new Match($showdown, $hand);
        return $match;
    }
       
    public function getWinner($players) {
        for($i=0; $i<count($players); $i++) {
            $players_score[$i] = $players[$i]->getScore();
        }
        arsort($players_score);
        reset($players_score);
        $winner_player_num = key($players_score);
        $winner_player = $players[$winner_player_num];
        return $winner_player;
    }
    
    public function getWinnerHand($player) {      
        return $player->getHand();
    }
    
    public function showWinnerHand($hand) { 
        foreach ($hand as $key => $value) {
            echo $value['card'];
        }
    }    
}

?>
