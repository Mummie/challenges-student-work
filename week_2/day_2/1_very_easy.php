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
             $name = "vader";
             $number = 5;
             function prints($name, $number){
                 echo str_repeat($name, $number);
             }
            prints($name, $number);

        ?>
    </p>
  </body>
</html>