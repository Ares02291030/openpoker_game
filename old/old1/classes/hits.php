<?php

class Hits {
    
    private $hit_cards = array();
    
    function __construct() {
    }
    
    function checkHits($flop_cards, $turn_card, $river_card, $hand) {
        
        //checking flop match on hand->table in colours
        if($hand[0][0] == $flop_cards[0][0]) {
            echo '<br><b>We have a match in colour from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'flop_card0' => $flop_cards[0], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        if($hand[0][0] == $flop_cards[1][0]) {
            echo '<br><b>We have a match in colour from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'flop_card1' => $flop_cards[1], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        if($hand[0][0] == $flop_cards[2][0]) {
            echo '<br><b>We have a match in colour from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'flop_card2' => $flop_cards[2], 'match' => 'colour', 'situation' => 'hand->table') );
        }           
        if($hand[1][0] == $flop_cards[0][0]) {
            echo '<br><b>We have a match in colour from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'flop_card0' => $flop_cards[0], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        if($hand[1][0] == $flop_cards[1][0]) {
            echo '<br><b>We have a match in colour from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'flop_card1' => $flop_cards[1], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        if($hand[1][0] == $flop_cards[2][0]) {
            echo '<br><b>We have a match in colour from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'flop_card2' => $flop_cards[2], 'match' => 'colour', 'situation' => 'hand->table') );
        }
                    
        
        //checking flop match on hand->table in numbers
        if($hand[0][1] == $flop_cards[0][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'flop_card0' => $flop_cards[0], 'match' => 'number', 'situation' => 'hand->table') );
        }
        if($hand[0][1] == $flop_cards[1][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'flop_card1' => $flop_cards[1], 'match' => 'number', 'situation' => 'hand->table') );
        }
        if($hand[0][1] == $flop_cards[2][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'flop_card2' => $flop_cards[2], 'match' => 'number', 'situation' => 'hand->table') );
        }           
        if($hand[1][1] == $flop_cards[0][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'flop_card0' => $flop_cards[0], 'match' => 'number', 'situation' => 'hand->table') );
        }
        if($hand[1][1] == $flop_cards[1][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'flop_card1' => $flop_cards[1], 'match' => 'number', 'situation' => 'hand->table') );
        }
        if($hand[1][1] == $flop_cards[2][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'flop_card2' => $flop_cards[2], 'match' => 'number', 'situation' => 'hand->table') );
        }   
        
        // Turn card colours
        if($hand[0][0] == $turn_card[0][0]) {
            echo '<br><b>We have a match in colour from Hand->Table on turn card</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'turn_card' => $turn_card[0], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        if($hand[1][0] == $turn_card[0][0]) {
            echo '<br><b>We have a match in colour from Hand->Table on turn card</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'turn_card' => $turn_card[0], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        
        // Turn card numbers
        if($hand[0][1] == $turn_card[0][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table on turn card</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'turn_card' => $turn_card[0], 'match' => 'number', 'situation' => 'hand->table') );
        }
        if($hand[1][1] == $turn_card[0][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table on turn card</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'turn_card' => $turn_card[0], 'match' => 'number', 'situation' => 'hand->table') );
        }        
        
        // River card colours
        if($hand[0][0] == $river_card[0][0]) {
            echo '<br><b>We have a match in colour from Hand->Table on river card</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'turn_card' => $river_card[0], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        if($hand[1][0] == $river_card[0][0]) {
            echo '<br><b>We have a match in colour from Hand->Table on river card</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'turn_card' => $river_card[0], 'match' => 'colour', 'situation' => 'hand->table') );
        }
        
        // River card numbers
        if($hand[0][1] == $river_card[0][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table on river card</b>'; 
            array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'turn_card' => $river_card[0], 'match' => 'number', 'situation' => 'hand->table') );
        }
        if($hand[1][1] == $river_card[0][1]) {
            echo '<br><b>We have a match in numbers from Hand->Table on river card</b>'; 
            array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'turn_card' => $river_card[0], 'match' => 'number', 'situation' => 'hand->table') );
        }        
              


            //checking flop match on table->table in colours
            if($flop_cards[0][0] == $flop_cards[1][0]) {
                echo '<br><b>We have a match in colour from Table->Table</b>'; 
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'flop_card1' => $flop_cards[1], 'match' => 'colour', 'situation' => 'table->table') );
            }        
            if($flop_cards[0][0] == $flop_cards[2][0]) {
                echo '<br><b>We have a match in colour from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'flop_card2' => $flop_cards[2], 'match' => 'colour', 'situation' => 'table->table') );                
            }
            if($flop_cards[1][0] == $flop_cards[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'flop_card0' => $flop_cards[0], 'match' => 'colour', 'situation' => 'table->table') );
            }
            if($flop_cards[1][0] == $flop_cards[2][0]) {
                echo '<br><b>We have a match in colour from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'flop_card2' => $flop_cards[2], 'match' => 'colour', 'situation' => 'table->table') );                
            }            
            if($flop_cards[2][0] == $flop_cards[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'flop_card0' => $flop_cards[0], 'match' => 'colour', 'situation' => 'table->table') );
            }
            if($flop_cards[2][0] == $flop_cards[1][0]) {
                echo '<br><b>We have a match in colour from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'flop_card1' => $flop_cards[1], 'match' => 'colour', 'situation' => 'table->table') );                
            }    
            
            
            
            //checking flop match on table->table in numbers
            if($flop_cards[0][1] == $flop_cards[1][1]) {
                echo '<br><b>We have a match in numbers from Table->Table</b>'; 
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'flop_card1' => $flop_cards[1], 'match' => 'number', 'situation' => 'table->table') );
            }
            if($flop_cards[0][1] == $flop_cards[2][1]) {
                echo '<br><b>We have a match in numbers from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'flop_card2' => $flop_cards[2], 'match' => 'number', 'situation' => 'table->table') );                
            }
            if($flop_cards[1][1] == $flop_cards[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'flop_card0' => $flop_cards[0], 'match' => 'number', 'situation' => 'table->table') );
            }
            if($flop_cards[1][1] == $flop_cards[2][1]) {
                echo '<br><b>We have a match in numbers from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'flop_card2' => $flop_cards[2], 'match' => 'number', 'situation' => 'table->table') );                
            }            
            if($flop_cards[2][1] == $flop_cards[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'flop_card0' => $flop_cards[0], 'match' => 'number', 'situation' => 'table->table') );
            }
            if($flop_cards[2][1] == $flop_cards[1][1]) {
                echo '<br><b>We have a match in numbers from Table->Table</b>';
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'flop_card1' => $flop_cards[1], 'match' => 'number', 'situation' => 'table->table') );                
            }   
            

            // Turn card colours
            if($flop_cards[0][0] == $turn_card[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table on turn card</b>'; 
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'turn_card' => $turn_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }
            if($flop_cards[1][0] == $turn_card[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table on turn card</b>'; 
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'turn_card' => $turn_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }            
            if($flop_cards[2][0] == $turn_card[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table on turn card</b>'; 
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'turn_card' => $turn_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }  

            // Turn card numbers
            if($flop_cards[0][1] == $turn_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on turn card</b>'; 
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'turn_card' => $turn_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }
            if($flop_cards[1][1] == $turn_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on turn card</b>'; 
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'turn_card' => $turn_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }            
            if($flop_cards[2][1] == $turn_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on turn card</b>'; 
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'turn_card' => $turn_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }              


            // River card colours
            if($flop_cards[0][0] == $river_card[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table on river card</b>'; 
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'turn_card' => $river_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }
            if($flop_cards[1][0] == $river_card[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table on river card</b>'; 
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'turn_card' => $river_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }            
            if($flop_cards[2][0] == $river_card[0][0]) {
                echo '<br><b>We have a match in colour from Table->Table on river card</b>'; 
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'turn_card' => $river_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }  

            // River card numbers
            if($flop_cards[0][1] == $river_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on river card</b>'; 
                array_push( $this->hit_cards, array('flop_card0' => $flop_cards[0], 'river_card' => $river_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }
            if($flop_cards[1][1] == $river_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on river card</b>'; 
                array_push( $this->hit_cards, array('flop_card1' => $flop_cards[1], 'river_card' => $river_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }            
            if($flop_cards[2][1] == $river_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on river card</b>'; 
                array_push( $this->hit_cards, array('flop_card2' => $flop_cards[2], 'river_card' => $river_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }                          
            
            
            //checking turn / river match on table->table in colours
            if($turn_card[0][0] == $river_card[0][0]) {
                echo '<br><b>We have a match in colours from Table->Table on turn / river card</b>'; 
                array_push( $this->hit_cards, array('turn_card' => $turn_card[0], 'river_card' => $river_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }
            if($river_card[0][0] == $turn_card[0][0]) {
                echo '<br><b>We have a match in colours from Table->Table on turn / river card</b>'; 
                array_push( $this->hit_cards, array('river_card' => $river_card[0], 'turn_card' => $turn_card[0], 'match' => 'colour', 'situation' => 'table->table') );
            }
            
            //checking turn / river match on table->table in numbers
            if($turn_card[0][1] == $river_card[0][1]) {
                echo '<br><b>We have a match in numbers from Table->Table on turn / river card</b>'; 
                array_push( $this->hit_cards, array('turn_card' => $turn_card[0], 'river_card' => $river_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }
            if($river_card[0][0] == $turn_card[0][0]) {
                echo '<br><b>We have a match in numbers from Table->Table on turn / river card</b>'; 
                array_push( $this->hit_cards, array('river_card' => $river_card[0], 'turn_card' => $turn_card[0], 'match' => 'number', 'situation' => 'table->table') );
            }
            
            //checking match on hand->hand in colour
            if($hand[0][0] == $hand[1][0]) {
                echo '<br><b>We have a match in colour from Hand->Hand</b>';
                array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'hand_card1' => $hand[1], 'match' => 'colour', 'situation' => 'hand->hand') );                
            }     
            if($hand[1][0] == $hand[0][0]) {
                echo '<br><b>We have a match in colour from Hand->Hand</b>';
                array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'hand_card0' => $hand[0], 'match' => 'colour', 'situation' => 'hand->hand') );                
            }
            
            
            //checking match on hand->hand in numbers
            if($hand[0][1] == $hand[1][1]) {
                echo '<br><b>We have a match in numbers from Hand->Hand</b>';
                array_push( $this->hit_cards, array('hand_card0' => $hand[0], 'hand_card1' => $hand[1], 'match' => 'number', 'situation' => 'hand->hand') );                
            }     
            if($hand[1][1] == $hand[0][1]) {
                echo '<br><b>We have a match in numbers from Hand->Hand</b>';
                array_push( $this->hit_cards, array('hand_card1' => $hand[1], 'hand_card0' => $hand[0], 'match' => 'number', 'situation' => 'hand->hand') );                
            }  

        }

   
   
    
    public function getHits() {
        return $this->hit_cards;
    }
    
    public function showHits() {
        $hit_cards = $this->hit_cards;
        foreach ($hit_cards as $key => $value) {
            echo '<br>';
            foreach ($value as $key => $value) {
                echo '<img src="images/cards/' . $value . '.png"></b>';
            }
        }
    }
}

?>
