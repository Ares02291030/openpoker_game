<?php
        //Loading data from saved objects (ex: object Deck which the dealer needs to have the same deck the whole hand session)
        $deck = Registry::Load('Deck');
        $table = Registry::Load('Table');
        $players = $table->getPlayers();

        // We need a dealer instance who response to client interface actions
        $dealer = new Dealer;


        // Switch statement responsing to client interface action
        switch ($request) {
              case 'seat_player_1': {
                  $table->seatPlayer($player = new Player('ArchyBoy', 1500));
                  Registry::Save($table);
                  $player->showProfilePhoto(0);
              }
              break;
              case 'seat_player_2': {
                  $table->seatPlayer(new Player('ALittleK', 1500));
                  Registry::Save($table);
                  $player->showProfilePhoto(1);
              }
              break;
              case 'seat_player_3': {
                  $table->seatPlayer(new Player('PokerPrincess', 1500));
                  Registry::Save($table);
                  //$player->showProfilePhoto(2);
              }
              break;
              case 'seat_player_4': {
                  $table->seatPlayer(new Player('FunkyAA', 1500));
                  Registry::Save($table);
                  //$player->showProfilePhoto(3);
              }
              break;
              case 'seat_player_5': {
                  $table->seatPlayer(new Player('SmashingAces', 1500));
                  Registry::Save($table);
                  //$player->showProfilePhoto(4);
              }
              break;
              case 'seat_player_6': {
                  $table->seatPlayer(new Player('BigKings', 1500));
                  Registry::Save($table);
                  //$player->showProfilePhoto(5);
              }
              break;

              case 'new_hand': {
                  echo '<br>Shuffling deck and dealing new hands!';
                  $deck = new Deck;
                  $dealer->shuffleDeck($deck);

                  for($i=0; $i<count($players); $i++) {
                    $dealer->dealPlayer($deck, $players[$i]);
                    //$players[$i]->showHand();
                    Registry::Save($table);
                    System_Helper_Html_Output::debug_start();
                    print_r($table);
                    System_Helper_Html_Output::debug_stop();
                }

            } break;

            case 'deal_flop': {
            $dealer->dealBurn($deck);
            $table->showFlop($dealer->dealFlop($deck, $table));
            Registry::Save($table);
            } break;

            case 'deal_turn': {
            $dealer->dealBurn($deck);
            $table->showTurn($dealer->dealTurn($deck, $table));
            Registry::Save($table);
            } break;

            case 'deal_river': {
            $dealer->dealBurn($deck);
            $table->showRiver($dealer->dealRiver($deck, $table));
            Registry::Save($table);
            } break;

            case 'show_hand_1': {
                 $players[0]->showHand();
            } break;
            case 'show_hand_2': {
                 $players[1]->showHand();
            } break;
            case 'show_hand_3': {
                 $players[2]->showHand();
            } break;
            case 'show_hand_4': {
                 $players[3]->showHand();
            } break;
            case 'show_hand_5': {
                 $players[4]->showHand();
            } break;
            case 'show_hand_6': {
                 $players[5]->showHand();
            } break;

        default : { echo '<br>Sorry, but could not find what you requested from server API'; } break;
        }


        if (count($players) >= 6) {
            //echo '<div id="infobox">';
            //echo 'Tournament starts in 1 minute';
            //echo '</div>';
        }
        ?>
