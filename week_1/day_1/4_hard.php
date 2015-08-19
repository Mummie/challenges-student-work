<!-- 
	Using everything you have learned and some googling 

	render the months that I ask for below but make sure they are not in my $monthsExcludeArray

	Months you should try to render:
		- April
		- September
		- December
 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>
          <?php
          
          	// months I dont want to render
          	$monthExcludeArray = [
          	 'January', 
          	 'February',
          	 'March',
          	 'May',
          	 'June',
          	 'July',
          	 'August',
          	 'September',
          	 'November'
          	];
          	$monthIncludeArray = [
          	    'April',
          	    'September',
          	    'December'
          	    ];
            
            if(in_array($monthIncludeArray, $monthExcludeArray)){
            echo "Your array does include these months";
            }
            else {
                echo "Your array does not include thse months";
            }
          	
          ?>
        </p>
	</body>
</html>