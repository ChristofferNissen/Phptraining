<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Functions: Return Values</title>
    </head>
    <body>
    	
    	<?php 
    		function add($val1, $val2) {
    			$sum = $val1 + $val2;
    			return $sum;
    		}

    		$result1 = add(3,4);
    		$result2 = add(5,$result1);
    		echo $result2;

    	?>

    	<br />

    	<?php


    		function better_hello($greeting, $target, $punct) {
    			return $greeting . " " . $target . $punct . "<br />";
    		}

    		echo better_hello("Hello there", "John Doe", "!");
    	?>
   
    </body>
</html>