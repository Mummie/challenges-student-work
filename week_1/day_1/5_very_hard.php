<!-- 
	Using everything you have learned and some googling

  The multi-demensional array below contains packages with prices but
  they are all out of order and I want to present them to my customer
  in the correct order with the lowest price first
 -->

<?php
  $packagesArray = array(
    array('name' => 'Package 1', 'price' => 5.99),
    array('name' => 'Package 2', 'price' => 3.01),
    array('name' => 'Package 3', 'price' => 100.01),
    array('name' => 'Package 4', 'price' => 11.00),
    array('name' => 'Package 5', 'price' => 25.95),
    array('name' => 'Package 6', 'price' => 10.99),
    array('name' => 'Package 7', 'price' => 11.00),
  );
  
?>
<!DOCTYPE html>
<html>
  <head></head>
	<body>
      <h1>Packages</h1>
      <p>Here are all the packages we offer and there price:</p>
      <table>
        <th><td>Name</td><td>Price</td></th>
        <!-- 
          this for each loop will iterate over each item above and
          set $package as the inner array so we can have access to it directly
          this is appose to accessing them like so $packagesArray[0]['name'];
         --> 
        <?php 
        // this foreach loop makes rows and columnssssss ayyye 
        
          foreach ($packagesArray as $packageArray): ?>
          <tr><td><?=$packageArray['name']?></td><td><?=$packageArray['price']?></td></tr>
          
        <?php endforeach;
        
        array_multisort($packagesArray, SORT_ASC); 
        var_dump($packagesArray);
        
        ?>
        <!-- 
        I understand what this code is doing, but I don't know how to include the 
        array_multisort function. Example #3 on php.net for the function makes a lot 
        more sense to me than this and I'm not sure how to work with what I'm given.
        -->
      </ul>
	</body>
</html>