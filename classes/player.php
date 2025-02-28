<?php

class Player {

    private $hand = array();
    private $name = '';
    private $stack = 0;
    private $score = 0;

    function __construct($name = null, $stack = null) {
        $this->name = $name;
        $this->stack = $stack;
    }

    public function setHand($hand) {
        $this->hand = $hand;
    }

    public function getHand() {
        return $this->hand;
    }

    public function showHand() {
        foreach ($this->hand as $key => $value) {
             echo '<img src="images/cards/' . strtolower($value['card']) . '.png"></b>';
        }
    }

    public function setStack($stack) {
        $this->stack = $stack;
    }

    public function getStack() {
        return $this->stack;
    }

    public function showStack() {
        echo 'Chips: ' .$this->stack;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function showName() {
        echo 'Name: ' .$this->name;
    }
    public function setScore($score) {
        $this->score = $score;
    }

    public function getScore() {
        return $this->score;
    }

    public function showScore() {
        echo 'Score: ' .$this->score;
    }

    public function showProfilePhoto($photo) {
        echo '<img src="images/profile/player_' . $photo .'.jpg" width="142" height="95">';
    }
}
?>
