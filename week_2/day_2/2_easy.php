<?php
    /**
     * Write a function called "add" that adds all the numbers in an array and
     * returns the result.
     */
    
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php
            
            function add($array) { 
                // write what I want it to do in here 
                $solution = 0;
                foreach($array as $addition) { 
                    $solution = $addition + $solution; 
                } 
                return($solution);
            } 
            
            echo add(array(1,2,3,4,5));
        ?>
    </p>
    <p>
        <?php
            echo add([6,7,8,9,10]);
        ?>
    </p>
  </body>
</html>