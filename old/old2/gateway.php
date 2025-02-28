<?php
        //Loading data from original objects (ex: object Deck which the dealer needs to have the same cards the whole hand session)
        $players = Data::loadNamed('players');
        $deck = Data::loadNamed('Deck');
        $dealer = new Dealer;
        $table = new Table($players);


        switch ($request) {
            case 'new_game': {
                echo '<br>Starting a new game!';
            } break;
              case 'new_hand': {
                  echo '<br>Shuffling deck and dealing new hands!';
                  $deck = new Deck;

                  $dealer->shuffleDeck($deck);     
                  for($i=0; $i<count($players); $i++) {
                     echo '<br>';
                     $dealer->dealPlayer($deck, $players[$i]);
                     $players[$i]->showHand();
                  }        
                  //Data::Save('players');
            } break;
            case 'deal_flop': {
            $dealer->dealBurn($deck);
            $table->showFlop($dealer->dealFlop($deck, $table));               
            } break;
            case 'deal_turn': {
            $dealer->dealBurn($deck);
            $table->showTurn($dealer->dealTurn($deck, $table));                
            } break;
            case 'deal_river': {
            $dealer->dealBurn($deck);
            $table->showRiver($dealer->dealRiver($deck, $table));                
            } break;
            case 'show_hand': {
                //$players = Data::loadNamed('players');
                 $players[0]->showHand();
                 echo 'my hand is; <br>';
                 //print_r($players);
            } break;
        
        default : { echo '<br>Sorry, but could not find what you requested from server API'; } break;
        }
     
       
//echo $request;
        //print_r($deck);
        ?>
  