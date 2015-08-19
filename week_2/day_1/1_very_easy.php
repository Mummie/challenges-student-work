<!-- 

    Using everything you have learned and some googling

    Sum the numbers between 1 and 20 and display the result

 -->
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>

        <?php

        $total = 0;
        for($i = 1; $i <= 20; $i++){
            $total = $total + $i;
        }
        echo $total;


        ?>
    </p>
  </body>
</html>