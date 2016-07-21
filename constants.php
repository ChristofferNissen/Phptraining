<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Constants</title>
    </head>
    <body>

    <?php 
    	$max_width = 980; // variable

    	define("MAX_WIDTH", 980); // Constant
    	
    	echo MAX_WIDTH;
    ?>
    <br />
    <?php // cant change the value, breaks code
    	//MAX_WIDTH += 1;
    	//echo MAX_WIDTH;
    ?>
    <br />
    <?php // can't even redefine it
    	define("MAX_WIDTH", 981);
    	echo MAX_WIDTH;
    ?>

    </body>
</html>