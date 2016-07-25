<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>While loops</title>
    </head>
    <body>
    	
    	<?php 
    		$count = 0; 
    		while ($count <= 10) {
    			if ($count % 2) {
    				echo "1";
    			} else {
    				echo "0";
    			}
    			$count++; // increment by 1
    		}
    		echo "<br />";
    		echo "Count: {$count}";	
    	?>


   
    </body>

</html>