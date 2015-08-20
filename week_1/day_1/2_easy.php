<!-- 
	Using everything you have learned and some googling

  Imagine this is a post page and they have sent you a number
  you want to return them the number it text format. For instance:
    
    - 1 -> one
    - 2 -> two

  but anything that is above 10 we want to return "Nothing is greater than 10"
 -->

<!DOCTYPE html>
<html>
  <head></head>
	<body>
        <p>
          <?php
            $number = 3 // this came from the previous page as a post variable
            

          	// code goes here ...
          	if($number < 10){
          	  switch ($number) {
          	  case 0: echo "zero"; 
          	  break;
          	  case 1: echo "one"; 
          	  break;
          	  case 2: echo "two";
          	  break;
          	  case 3: echo "three"; 
          	  break; 
          	  case 4: echo "four"; 
          	  break; 
          	  case 5: echo "five"; 
          	  break; 
          	  case 6: echo "six"; 
          	  break; 
          	  case 7: echo "seven"; 
          	  break; 
          	  case 8: echo "eight"; 
          	  break; 
          	  case 9: echo "nine";
          	  
          	}
          	else {
          	  
          	}
          ?>
        </p>
	</body>
</html>