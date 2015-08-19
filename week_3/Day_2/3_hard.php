<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /*
             * Bring in your createDeck and dealCards function
               For the specified number of players below, assign each one an even set of cards.
               We will do this by counting out how many players there are, counting how many cards
               are in the deck. then dividing them so we know how many cards each player should get
             */
            
        
            function createDeck() {
                $suits = array ("clubs", "diamonds", "hearts", "spades");
            $faces = array (
                "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
            );
            
            $deck = array();
              
            foreach($suits as $suit){
                foreach($faces as $value=>$face){
                    $newKey = "$value of $suit";
                    $deck[$newKey] = $face;
                    
                }
            }
                return $deck;
                
            }
            function shuffle_assoc(&$array) {
                 $keys = array_keys($array);

                 shuffle($keys);

             foreach($keys as $key) {
                 $new[$key] = $array[$key];
            }

                 $array = $new;

                return true;
            }
            $deck = createDeck();
            shuffle_assoc($deck); 
        
              
            /*
                We will now create a function to deal these cards to each user
                modify this function so that it returns the number of cards specified to the user
                also, it must modify the deck so that those cards are no longer available to be ditributed
            */
    
               $num_players = 4;
               $num_cards_in_deck = count($deck);
               $num_cards_to_give_each_player = $num_cards_in_deck / $num_players;

                /*
                  use a for loop to add the "dealt hands" to the $players array
                */
                
                
            $players = array(
              'one' => array(),
              'two' => array(),
              'three' => array(),
              'four' => array()
            ); 
            function dealCards($deck, $num_cards_to_give_each_player) {
                $players = array_chunk($deck, $num_cards_to_give_each_player);
                return($players);
            }
            $players = dealCards($deck, $num_cards_to_give_each_player);
            
            //echo $players[3][0];
               /*
               lets create a simple game
               each player will play a card and whoever has the highest value wins. if there are 2 cards played
               that have the same value everybody loses and that round is now a draw.

               store the results of each game in round_winners and also who won that round as the value.
               if the round is a draw store the value as DRAW

                use a loop to play each game until all oponents are out of cards

                Print out the array of all the rounds. if there was a draw the round should say DRAW
                if a player has one it should display "Player X" where X is the index of the player
                
               */
               $p1win = 0;
               $p2win = 0;
               $p3win = 0;
               $p4win = 0;
              
               $rounds = 0;
               $won = "";
               
                 
                
                
                        
                  while($rounds < 12){
                        $p1card = $players[0][$rounds];
                        $p2card = $players[1][$rounds];
                        $p3card = $players[2][$rounds];
                        $p4card = $players[3][$rounds];
                        if($p1card == $p2card || $p1card == $p3card || $p1card == $p4card || $p2card == $p3card || $p2card == $p4card || $p3card == $p4card){
                            $won = "DRAW";
                            }
                        else{
                            if($p1card > $p2card && $p1card > $p3card && $p1card > $p4card){
                                $p1win++;
                                $won = "Player 1";
                            }
                            elseif($p2card > $p1card && $p2card > $p3card && $p2card > $p4card){
                                $p2win++;
                                $won = "Player 2";
                            }
                            elseif($p3card > $p1card && $p3card > $p2card && $p3card > $p4card){
                                $p3win++;
                                $won = "Player 3";
                            }
                            elseif($p4card > $p1card && $p4card > $p2card && $p4card > $p3card){
                                $p4win++;
                                $won = "Player 4";
                            }
                        }
                        $rounds++;
                        
                        echo "
                        Game $rounds <br/>
                        Player 1: $p1card <br/>
                        Player 2: $p2card <br/>
                        Player 3: $p3card <br/>
                        Player 4: $p4card <br/>
                        ";
                        if($won === "DRAW"){
                            echo "DRAW! <br/>";
                        }
                        else{
                            echo "$won this round! <br/>";
                        }
                  }
                if($p1win > $p2win && $p1win > $p3win && $p1win > $p4win){
                            echo "Player 1 wins the game!";
                        }
                        elseif($p2win > $p1win && $p2win > $p3win && $p2win > $p4win){
                            echo "Player 2 wins the game!";
                        }
                        elseif($p3win > $p1win && $p3win > $p2win && $p3win > $p4win){
                            echo "Player 3 wins the game!";
                        }
                        elseif($p4win > $p1win && $p4win > $p2win && $p4win > $p2win){
                            echo "Player 4 wins the game!";
                        }
              
                
                
              //$round_winners =

        ?>

    </p>

    </body>
</html>
