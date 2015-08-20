<!-- 
	Using everything you have learned and some googling

	- Find all numbers between 1 and 100 that are divisible evenly by 3
	- From that list of numbers, also find all the numbers that divisible evenly by 6
	- Display each set of numbers with a comma delimited list
	- Also display how many numbers are divisible by 3 and by 6 respectively

	Expected Results

	 3, 6, 9, 12, 15, 18, etc
	 6, 12, 18, 24, 30, etc

	 Divisible by 3 = ###
	 Divisible by 6 = ###


 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>

            <?php


                // code goes here ...
                $divisbleByThree = array(); 
                $alsoDivisibleBySix = array();
                for($i = 1; $i <= 100; $i++) { 
                	if($i%3 === 0) { 
                		array_push($divisbleByThree, $i);
                		// divisble by 3 
                		if($i%6 === 0) { 
                		array_push($alsoDivisibleBySix, $i);
                		// divisble by 6 and 3
                		} 
                	} 
                }
                echo implode(', ', $divisbleByThree); 
                echo '<br />'; 
                echo implode(', ', $alsoDivisibleBySix);
                echo '<br /><br />'; 
                echo 'Divisible by 3: ' . count($divisbleByThree);
                echo '<br />';
                echo 'Divisible by 6: ' . count($alsoDivisibleBySix);
                

            ?>
        </p>
	</body>
</html>