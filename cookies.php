<?php 
	// REMEMBER: Setting cookies must be before *any* HTML output
	// unless output buttering is turned on. 

	$name = "test";
	$value = "hello";
	$expire = time() + (60*60*24);
	// Setting a cookie:
	//setcookie($name, $value, $expire);

	// Unsetting cookies
	// setcookie($name);
	// setcookie($name, null, $expire);
	// setcookie($name, $value, time() - 3600);
	
	// Kevin's recommendation for unsetting:
	setcookie($name, null, time() - 3600);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Cookies</title>
    </head>
    <body>
    	
    	<?php 
    	//if (isset($_COOKIE["test"])) {
    	//	$test = $_COOKIE["test"];	
    	//} else {
    	//	$test = "";
    	//}

    	$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";

    	echo $test;

    	?>


   
    </body>
</html>