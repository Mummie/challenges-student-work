<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <?php

            /**
             * Write a function that takes a "name" and "number" (n)
             * print the name (n) times
             */
            $name = 'Tabitha'; 
            $num = 8;
            function theName($name, $num) { 
              echo str_repeat($name, $num);
            } 
            
            theName($name, $num); 


        ?>
    </p>
  </body>
</html>