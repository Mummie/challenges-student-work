<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <p>

        <?php
            /* 
              Using your advanced knowledge of cards and arrays, Create a game of Blackjack
              Rules:
             	at any given time there will only be 2 players. the dealer and player one.
             	4 cards will be dealt out each round, 2 to the dealer and 2 to the player
             	if the amount in the players hand is less than or equal to the amount in the dealer hand
             		you must get a hit (draw a card)
             	if a player hits and the amount he has goes over 21, he has BUSTED and the dealer won that round
             	if the player ever reaches an amount greater than the dealers he should stay; then it will be 
             	    the dealers turn.
             	The dealer must draw until he reaches an amount greater than the player or until he has BUST
             	Subtract $100 from the players bank every time they lose
             	Add $200 to the players bank every time they win
             	Player starts with $1000 in the bank account
             	Aces can either be an 11 or 1
             	
             	the game will continue as long as there are enough cards in the deck OR the player runs out of money

             	Output:
		         	How many games were played?
		         	Who won the game?
		         	Which round did the player's bank reach half way?
		         	How many times did the player get blackjack ?

             	Extra Credit && Prize =]

             		Create a function called countCards and enable it for the player NOT the dealer
             		This function must analyze the deck and determine if the player should draw again
             		even if the amount in his hand is greater than the dealer.
             		This would be very useful lets say if the dealer has a sum of 9 on the table
             		You might have two 6's (amount of 12). Should you hit again? 
             		More than likely, because chance is the dealer can beat your 12

             	Winner will be determined by whoever has successfully implemented this AND has the best logic
            */
             
             function createDeck() {
                 
                $suits = array ("clubs", "diamonds", "hearts", "spades");
                $faces = array (
                    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
                    "8" => 8, "9" => 9, "10" => 10, "Jack" => 10, "Queen" => 10, "King" => 10
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
            
            $deck = createDeck($deck);
            function rearrange($array){
                shuffle($array);
                return $array;
            }
            
            $deck = rearrange($deck);
            // v Checking stuff
          // var_dump($deck);exit;
            
            //cards totals and money and sorts
            $pcard1 = 0;
            $pcard2 = 0;
            $pcard3 = 0;
            $pcard4 = 0;
            $ptotal = 0;
            
            $dcard1 = 0;
            $dcard2 = 0;
            $dcard3 = 0;
            $dcard4 = 0;
            $dtotal = 0;
            
            $pmoney = 1000;
            $winround = 100;
            $loseround = 100;
            $round = 0;
            $blackjack = 0;
            
            //like that movie 21 or rain man or almost every gambling movie that is centered arround a genius
            function countCards($cards, $card){
                
                if($card + $cards <= 21){
                    if($card == 1 && $cards <= 10){
                        return 11; 
                    }
                    else{
                    return $card;
                    }
                }
                else{
                    return 0;
                }
                
            }
            
            //as if the dealer is a god and no mortal can ever beat him
            function dealerCountCards($cards, $deck){
                if($deck[5] + $cards <= 21){
                    if($deck[5] == 1 && $cards <= 10){
                        return 11; 
                    }
                    else{
                    return $deck[5];
                    }
                }
                else{
                    return 0;
                }
            }
            
            //removes # cards from deck
            function remove($deck, $number){
                $newDeck = $deck;
                
                for($j = 0; $j < $number; $j++){
                    array_shift($newDeck);
                }
               
                return $newDeck;
               
            }
            
            
            //blackjack yo
            while(count($deck) > 4 && $pmoney > 0){
                $pcard1 = $deck[0];
                $dcard1 = $deck[1];
                $pcard2 = $deck[2];
                $dcard2 = $deck[3];
                // v Just checking stuff 
                // $pcard3 = $deck[4];
                // $pcard4 = $deck[5];
               
                $round++;
                
                 //determines whether to change an ace
                if($pcard1 == 1 && $pcard2 <= 10){
                  $pcard1 == 11; 
                }
                elseif($pcard2 == 1 && $pcard1 <= 10){
                    $pcard2 == 11;
                }
                if($dcard1 == 1 && $dcard2 <= 10){
                  $dcard1 == 11; 
                }
                elseif($dcard2 == 1 && $dcard1 <= 10){
                    $dcard2 == 11;
                }
                // v Still checking stuff
                //echo "$pcard1 $pcard2 ... $dcard1 $dcard2 <br/>";
                
                //the hits of the dealer and player 
                $ptotal = $pcard1 + $pcard2;
                $pcard3 = countCards($ptotal, $deck[4]);
                $ptotal = $pcard1 + $pcard2 + $pcard3;
                if($pcard3 !== 0){
                    $pcard4 = countCards($ptotal, $deck[5]);
                }
                //echo "$pcard1     $pcard2     $pcard3     $deck[4] <br/>"; 
                
                /*if($ptotal <= $dcard1 + $dcard2 && $ptotal < 22){
                    $pcard3 = $deck[4];
                } */
                
                /* $dtotal = $dcard1 + $dcard2;
                $dcard3 = dealerCountCards($dtotal, $deck);
                */
                //echo "$dcard1     $dcard2     $dcard3 <br/>"; 
                
                if($dcard1 + $dcard2 < $pcard1 + $pcard2 + $pcard3 + $pcard4 && $dcard1 + $dcard2 < 22){
                    $dcard3 = $deck[6];
                    if($dcard1 + $dcard2 + $dcard3 < $pcard1 + $pcard2 + $pcard3 + $pcard4 && $dcard1 + $dcard2 + $dcard3 < 22){
                        $dcard4 = $deck[7];
                    }
                }
                
                
                //figure it out
                $ptotal = $pcard1 + $pcard2 + $pcard3;
                $dtotal = $dcard1 + $dcard2 + $dcard3 + $dcard4;
                
                //echo 'c-before' . count($deck);
                //determining who wins by points and such
                    if($ptotal == $dtotal || $ptotal > 21 && $dtotal > 21){
                        $roundwinner = "No One";
                        $deck = rearrange($deck);
                        
                    }
                    elseif($ptotal > $dtotal){
                        if($ptotal > 21){
                            $pmoney -= $loseround;
                            $roundwinner = "Dealer";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                            }
                            if($dcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($dcard4 !== 0){
                                    $deck = remove($deck, 1);
                                    }
                                }
                            }
                        else{
                            if($ptotal < 21){
                                $blackjack++;
                            }
                            $pmoney += $winround;
                            $roundwinner = "Player";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                            }
                                if($dcard3 !== 0){
                                    $deck = remove($deck, 1);
                                    if($dcard4 !== 0){
                                        $deck = remove($deck, 1);
                                    }
                                }
                            }
                        }   
                    elseif($dtotal > $ptotal){
                        if($dtotal > 21){
                            $pmoney += $winround;
                            $roundwinner = "Player";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                
                                
                                $deck = remove($deck, 1);
                                
                                
                                if($dcard3 !== 0){
                                    $deck = remove($deck, 1);
                                    if($dcard4 !== 0){
                                        $deck = remove($deck, 1);
                                    }
                                }
                            }
                        }
                        else{
                            $pmoney -= $loseround;
                            $roundwinner = "Dealer";
                            $deck = remove($deck, 4);
                            if($pcard3 !== 0){
                                $deck = remove($deck, 1);
                                if($dcard3 !== 0){
                                    $deck = remove($deck, 1);
                                    if($dcard4 !== 0){
                                        $deck = remove($deck, 1);
                                    }
                                }
                            }
                        }
                        
                    }
               // echo 'c-after' . count($deck);
            
                
                // v Still Just checking stuff
                //echo $ptotal . "<br/>";
                //echo $dtotal . "<br/>";
                
                //script of what to print after each game
                echo "
                Round: $round <br/>
                Round Winner: $roundwinner <br/>
                Players Money: $$pmoney <br/><br/>
                ";
                
                // v Just checking stuff again
                //echo "Count" . count($deck) . "<br/>";
                if($pmoney == 500){
                    $halfway = true;
                    $amount = $round;
                }
                
                //script of what to print when a winner is found
                if(count($deck) <= 4 && $pmoney > 0 ){
                    if($halfway == true){
                      echo "The player hit halfway in round $amount <br/>";  
                    }
                    if($blackjack !== 0){
                        if($blackjack == 1){
                            echo "The player hit blackjack $blackjack time <br/>";
                        }
                        else{
                            echo "The player hit blackjack $blackjack times <br/>";
                        }
                    }
                    echo "Winner of the Game: Player! with $$pmoney";
                }
                elseif($pmoney == 0){
                    echo "Winner of the Game: Dealer! It took $round rounds to beat the player.";
                }
                
                
                
      
            }
            
            
            
            
            
        ?>

    </p>

    </body>
</html>
