<?php

class Deck { 

    private $cards = array(
        array('card' => 'HA', 'score' => 14,'suit' => 'H'),
        array('card' => 'HK', 'score' => 13,'suit' => 'H'),
        array('card' => 'HQ', 'score' => 12,'suit' => 'H'),
        array('card' => 'HJ', 'score' => 11,'suit' => 'H'),
        array('card' => 'H10','score' => 10,'suit' => 'H'),
        array('card' => 'H9', 'score' => 9, 'suit' => 'H'),
        array('card' => 'H8', 'score' => 8, 'suit' => 'H'),
        array('card' => 'H7', 'score' => 7, 'suit' => 'H'),
        array('card' => 'H6', 'score' => 6, 'suit' => 'H'),
        array('card' => 'H5', 'score' => 5, 'suit' => 'H'),
        array('card' => 'H4', 'score' => 4, 'suit' => 'H'),
        array('card' => 'H3', 'score' => 3, 'suit' => 'H'),
        array('card' => 'H2', 'score' => 2, 'suit' => 'H'),
        
        array('card' => 'CA', 'score' => 14,'suit' => 'C'),
        array('card' => 'CK', 'score' => 13,'suit' => 'C'),
        array('card' => 'CQ', 'score' => 12,'suit' => 'C'),
        array('card' => 'CJ', 'score' => 11,'suit' => 'C'),
        array('card' => 'C10','score' => 10,'suit' => 'C'),
        array('card' => 'C9', 'score' => 9, 'suit' => 'C'),
        array('card' => 'C8', 'score' => 8, 'suit' => 'C'),
        array('card' => 'C7', 'score' => 7, 'suit' => 'C'),
        array('card' => 'C6', 'score' => 6, 'suit' => 'C'),
        array('card' => 'C5', 'score' => 5, 'suit' => 'C'),
        array('card' => 'C4', 'score' => 4, 'suit' => 'C'),
        array('card' => 'C3', 'score' => 3, 'suit' => 'C'),
        array('card' => 'C2', 'score' => 2, 'suit' => 'C'),
        
        array('card' => 'DA', 'score' => 14,'suit' => 'D'),
        array('card' => 'DK', 'score' => 13,'suit' => 'D'),
        array('card' => 'DQ', 'score' => 12,'suit' => 'D'),
        array('card' => 'DJ', 'score' => 11,'suit' => 'D'),
        array('card' => 'D10','score' => 10,'suit' => 'D'),
        array('card' => 'D9', 'score' => 9, 'suit' => 'D'),
        array('card' => 'D8', 'score' => 8, 'suit' => 'D'),
        array('card' => 'D7', 'score' => 7, 'suit' => 'D'),
        array('card' => 'D6', 'score' => 6, 'suit' => 'D'),
        array('card' => 'D5', 'score' => 5, 'suit' => 'D'),
        array('card' => 'D4', 'score' => 4, 'suit' => 'D'),
        array('card' => 'D3', 'score' => 3, 'suit' => 'D'),
        array('card' => 'd2', 'score' => 2, 'suit' => 'D'),
        
        array('card' => 'SA', 'score' => 14,'suit' => 'S'),
        array('card' => 'SK', 'score' => 13,'suit' => 'S'),
        array('card' => 'SQ', 'score' => 12,'suit' => 'S'),
        array('card' => 'SJ', 'score' => 11,'suit' => 'S'),
        array('card' => 'S10','score' => 10,'suit' => 'S'),
        array('card' => 'S9', 'score' => 9, 'suit' => 'S'),
        array('card' => 'S8', 'score' => 8, 'suit' => 'S'),
        array('card' => 'S7', 'score' => 7, 'suit' => 'S'),
        array('card' => 'S6', 'score' => 6, 'suit' => 'S'),
        array('card' => 'S5', 'score' => 5, 'suit' => 'S'),
        array('card' => 'S4', 'score' => 4, 'suit' => 'S'),
        array('card' => 'S3', 'score' => 3, 'suit' => 'S'),
        array('card' => 'S2', 'score' => 2, 'suit' => 'S')
    );

    function __construct() {
        ;
    }
    
    
    public function getDeck() {
        return $this->cards;
    }
    public function setDeck($cards) {
        $this->cards = $cards;
    }    
    public function getCardsText($array) {
        foreach ($array as $key => $value) {
            $text .= $value['card'];
        }
        return $text;
    }        
}

?>
 