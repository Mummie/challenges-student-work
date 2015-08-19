<!-- 
	Using everything you have learned and some googling

    Let's play paper rock scissors

    Simulate 2 people playing the best of 7 (gotta win 4)
        - show the results of each "game"

        i.e.

        Game 1:
        Mark - Paper
        Eric - Rock
        Mark Wins [Mark = 1, Eric = 0]

        Game 2:
        Mark - Rock
        Eric - Scissors
        Mark Wins [Mark = 2, Eric = 0]

        etc .....

 -->

<!DOCTYPE html>
<html>
<head></head>
<body>
<p>

    <?php


    $p1win = 0;
    $p2win = 0;
    $choicep1 = "";
    $choicep2 = "";
    $choices = array("rock", "paper", "scissors");
    $played = 0;
    
    while($p1win < 4 && $p2win < 4){
        $won = "";
        $choicep1 = $choices[rand(0,2)];
        $choicep2 = $choices[rand(0,2)];
        if($choicep1 == $choicep2){
            $won = "No One";
        }
        else{
            if($choicep1 == "rock"){
                if($choicep2 == "paper"){
                    $p2win++;
                    $won = "Player 2";
                }
                else{
                    $p1win++;
                     $won = "Player 1";
                }
            }
            elseif($choicep1 == "scissors"){
                if($choicep2 == "rock"){
                    $p2win++;
                     $won = "Player 2";
                }
                else{
                    $p1win++;
                     $won = "Player 1";
                }
            }
            elseif($choicep1 == "paper"){
                if($choicep2 == "scissors"){
                    $p2win++;
                     $won = "Player 2";
                }
                else{
                    $p1win++;
                     $won = "Player 1";
                }
            }
        }

        $played++;
        echo "
            Game $played <br/> 
            player 1 - $choicep1 <br/> 
            player 2 - $choicep2 <br/>
            $won Wins! [ player 1 = $p1win, player 2 = $p2win ] <br/> <br/>
        ";
        
    }
    

    ?>
</p>
</body>
</html>