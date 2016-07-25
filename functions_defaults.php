<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Functions: Default argument values</title>
    </head>
    <body>
    	
    	<?php 
    	ini_set('display_errors','On');
    	error_reporting(E_ALL);

    		
    		function paint($room="office", $color="red") {
    			return "the color of the {$room} is {$color}.<br />";
    		}

    		echo paint();
    		echo paint("bedroom", "blue");
    		echo paint("bedroom", null);
    		echo paint("bedroom");
    		echo paint("blue");

    	?>

    	<br />

    </body>
</html>