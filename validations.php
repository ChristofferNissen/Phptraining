<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Validations</title>
    </head>
    <body>
    	
    	<?php 

    	// * presence
    		$value = trim("");
    		if (!isset($value) || $value === "") {
    			echo "Validation failed. <br />";
    		}

    	// * string length
    	// minimum length
    		$value = "abcd";
    		$min = 3;
    		if (strlen($value) < $min) {
    			echo "Validation fialed. <br />";
    		}

    	// maximum length
    		$max = 6;
    		if (strlen($value) > $max) {
    			echo "Validation fialed. <br />";
    		}

    	// * type
    		$value = "1";
   			if (!is_string($value)) {
   				echo "Validation fialed. <br />";
    		}

    	// * inclusion in a set
    		$value = "4";
    		$set = array("1", "2", "3", "4");
   			if (!in_array($value, $set)) {
   				echo "Validation fialed. <br />";
    		}

    	// * uniqueness
    	// uses a database to ceck uniqueness


    	// * format
    	// use a regex on a string
    	// preg_match($regex, $subject)
    	//	if (preg_match("/PHP/", "PHP is fun.")) {
    	//		echo "A match was found.";
    	//	} else {
    	//		echo "A match was not found";
    	//	}

    		$value = "nobody@nowhere.com";
    		if (!preg_match("/@/", $value)) {
    			echo "A match was not found, validation failed.";
    		}

    		if (strpos($value, "@") === false) {
    			echo "Validation failed.<br />";
    		}
    	?>
   
    </body>
</html>