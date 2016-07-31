<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Validation Errors</title>
    </head>
    <body>
    	
    	<?php 
        require_once('validation_functions.php');

        $errors = array();

        // $username = trim($_POST["username"]);
        $username = trim("Ch");

        if (!has_presence($username)) {
            $errors['username'] = "Username cant be blank";
        }

    	?>


        <?php echo form_errors($errors) ?>
   
    </body>
</html>