<?php 
	// This is how you redirect to a new page
	function redirect_to($new_location) { // fucntion is optional, but a nice way to control
		header("Location: " . $new_location);
		exit; 	
	}

	$logged_in = $_GET['logged_in']; 

	if ($logged_in == "1") {
		redirect_to("basic.html");
	} else {
		redirect_to("arrays.php");
	}

	// redirect_to("arrays.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Page Redirection</title>
    </head>
    <body>
    	
    	<?php 

    	?>
   
    </body>
</html>