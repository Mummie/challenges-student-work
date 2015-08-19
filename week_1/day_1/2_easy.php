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
            $number = 31; // this came from the previous page as a post variable

          	switch($number){
          	  case 1:
          	    echo "One";
          	  break;
          	  case 2:
          	    echo "Two";
          	  break;
          	  case 3:
          	    echo "Three";
          	  break;
          	  case 4:
          	    echo "Four";
          	  break;
          	  case 5:
          	    echo "Five";
          	  break;
          	  case 6:
          	    echo "Six";
          	  break;
          	  case 7:
          	    echo "Seven";
          	  break;
          	  case 8:
          	    echo "Eight";
          	  break;
          	  case 9:
          	    echo "Nine";
          	  break;
          	  case 10:
          	    echo "Ten";
          	  break;
          	  default:
          	    echo "Nothing is greater than 10";
          	}
          ?>
        </p>
	</body>
</html>