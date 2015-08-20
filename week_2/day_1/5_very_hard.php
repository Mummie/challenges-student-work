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


    // initialize scores to 0
   $Ericscore = 0;
   $Markscore = 0;
   // set the possisable selections
   $options = array('Rock', 'Paper', 'Scissors');

   // loop while neither mark or eric have at least 4 wins
   while($Ericscore < 4 && $Markscore < 4){

       // pick a random selection for both mark and eric
       $Markroll=$options[rand(0,2)];
       $Ericroll=$options[rand(0,2)];

       // If it is a tie, move on
       if($Ericroll == $Markroll) {
           //rolled same thing
           echo "Eric Rolled $Ericroll<br />";
           echo "Mark Rolled $Markroll<br />";
           echo "Tie Game!<br />";
           echo "<br />";
           // Do not run any other code for this game, move to the next
           continue;
       }

       // Check for winning conditions
       if($Ericroll == "Rock"){
           // Mark wins if Paper
           if($Markroll == "Paper") {
               $Markscore++;
           } else {
               $Ericscore++;
           }
       }
       elseif($Ericroll == "Paper"){
           // Mark wins if Scissors
           if($Markroll == "Scissors") {
               $Markscore++;
           } else {
               $Ericscore++;
           }
       }
       elseif($Ericroll == "Scissors"){
           // Mark wins if Rock
           if($Markroll == "Rock") {
               $Markscore++;
           } else {
               $Ericscore++;
           }
       }

       // Display the results of the current game
       echo "Eric Rolled $Ericroll<br />";
       echo "Mark Rolled $Markroll<br />";
       echo "Eric's score = $Ericscore<br />";
       echo "Mark's score = $Markscore<br />";
       echo "<br />";

   }


    ?>
</p>
</body>
</html>