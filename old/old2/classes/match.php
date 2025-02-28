<?php

class Match {

    private $showdown = array();
    private $hand = array();
    private $score = 0;
    private $text = '';
    
    function __construct($showdown) {
        $this->showdown = $showdown;
        $this->hand = $hand;
        if($this->checkTwoPairs()) { 
            $this->setScore($this->getScoreTwoPairs($this->checkTwoPairs())); 
            $this->setText('Two pairs:' . $this->hand[0]['card'][1] . ' and ' . $this->hand[1]['card'][1]);
            }
        if($this->checkOnePair()) { 
            $this->setScore($this->getScoreOnePair($this->checkOnePair())); 
            $this->setText('One pair:' . $this->hand[0]['card'][1] . ' and ' . $this->hand[1]['card'][1]);
            }
        //$this->showScore();
                
    }

    public function setText($text) {
        $this->text = $text;
    }
    
    public function getText() {
        return $this->text;
    }
    
    public function showText() {
        echo 'Speak: ' . $this->getText();
    }
    
    
    public function setScore($score) {
        $this->score = $score;
    }
    
    public function getScore() {
        return $this->score;
    }
    
    public function showScore() {
        echo 'Score: ' . $this->getScore();
    }

    public function checkOnePair() {          
        foreach ($this->showdown as $key => $value) {
            $card_numbers[] = $value['score'];  
        }
        
        $helper = new System_Helper_Array_Find;
        
        if($helper->hasdupes($card_numbers)) {
            $match_cards = $helper->getdupes($card_numbers);  
            if(count($match_cards) == 1) {
                return $match_cards;
            }
        }
    }  

    public function checkTwoPairs() {        
        foreach ($this->showdown as $key => $value) {
            $card_numbers[] = $value['score'];  
        }
        
        $helper = new System_Helper_Array_Find;
            
        if($helper->hasdupes($card_numbers)) {
            $match_cards = $helper->getdupes($card_numbers);  
            
            if(count($match_cards) == 2) {
                return ($match_cards);
            }
        }
    }  
    
    public function getScoreTwoPairs($match_cards) {
        foreach ($match_cards as $key => $value) {
            $score += ($match_cards[$key]) + ($match_cards[$key]);
        }
        return $score;
    }

    public function getScoreOnePair($match_cards) {
        foreach ($match_cards as $key => $value) {
            $score += ($match_cards[$key]) + ($match_cards[$key]);
        }
        return $score;
    }
    
    public function showOnePair($match_cards) {
        if($match_cards) {
            foreach ($match_cards as $key => $value) {
                echo '<h3>You got 1 pair of ' . $value[0] . 's</h3><br>'; 
            }
        }
    }
    
    public function showTwoPairs($match_cards) {
        if($match_cards) {
            foreach ($match_cards as $key => $value) {
               $hit_cards[] = $value; 
            }
             echo '<h3>You got 2 pairs of ' . $hit_cards[0] . 's and ' . $hit_cards[1] . 's</h3><br>'; 
        }
    }    
}

?>
