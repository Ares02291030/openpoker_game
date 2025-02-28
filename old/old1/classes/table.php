<?php

class Table {
    
    private $flop_cards = array();
    private $turn_card = array();
    private $river_card = array();
    private $showdown = array();
    private $players = array();
    
    function __construct($players) {
        $this->players = $players; // optional players array or use seatPlayers() to seat one by one
    }
    
    public function seatPlayer($player) {
        array_push($this->players, $player);
        echo '<br>Welcome to the table: ' . $player->getname();
    }
    
    public function getShowdown($player) {
        $this->showdown = $this->flop_cards; 
        array_push($this->showdown, $this->turn_card[0]);
        array_push($this->showdown, $this->river_card[0]);
        
        $player = $this->players[$player];
        $hand = $player->getHand();

        array_push($this->showdown, $hand[0]);
        array_push($this->showdown, $hand[1]);

        return $this->showdown;
    }    
    
    public function setFlop($flop_cards) {
        $this->flop_cards = $flop_cards;
    }
    public function setTurn($turn_card) {
        $this->turn_card = $turn_card;
    }
    public function setRiver($river_card) {
        $this->river_card = $river_card;
    }

    public function getFlop() {
        return $this->flop_cards;
    }
    
    public function getTurn() {
        return $this->turn_card;
    }
    
    public function getRiver() {
        return $this->river_card;
    }
      public function getPlayer($player) {
        return $this->players[$player];
    }      

    public function showDeck(Deck $deck) {
        $cards = $deck->getDeck();
        foreach ($cards as $key => $value) {
            echo '<img src="images/cards/' . strtolower($value['card']) . '.png"></b>';
        }
    }
    
    public function showFlop($flop_cards) {
        foreach ($flop_cards as $key => $value) {
            echo '<img src="images/cards/' . strtolower($value['card']) . '.png"></b>';
        }
    }
    
    public function showTurn($turn_card) {
        foreach ($turn_card as $key => $value) {
            echo '<img src="images/cards/' . strtolower($value['card']) . '.png"></b>';
        }
    }        
    
    public function showRiver($river_card) {
        foreach ($river_card as $key => $value) {
            echo '<img src="images/cards/' . strtolower($value['card']) . '.png"></b>';
        }
    }       
}


?>
