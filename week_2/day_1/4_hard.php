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
            $threeArray = array();
            $sixArray = array();

			for($i = 1; $i <= 100; $i++){
				$three = $i % 3;
				$six = $i % 6;
				if($three == 0){
					array_push($threeArray, $i);
				} 
				if($six == 0){
					array_push($sixArray, $i);
				}			
			}
			echo "<pre>";
                $comma3 = implode(",", $threeArray);
                echo $comma3;
                echo "</pre>";
                echo "<pre>";
                $comma6 = implode(",", $sixArray);
                echo $comma6;
                echo "</pre>";
                $amount3 = count($threeArray);
                $amount6 = count($sixArray);
                echo "<pre>";
                echo "Divisible by 3: " . $amount3;
                echo "</pre>";
                echo "<pre>";
                echo "Divisible by 6: " . $amount6;
                echo "</pre>";

            ?>
        </p>
	</body>
</html>