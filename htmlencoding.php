<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>HTML encoding</title>
    </head>
    <body>


    <?php 
    $linktext = "<Click> & learn more";

	?>

    	
    <a href=" ">
    	<?php echo htmlspecialchars($linktext); ?>
    </a>
    <br />

    <?php 

    $text = "§¡“∞™¡ü¶";
    echo htmlentities($text);

    ?>

    <br />

    <?php // What to use when

    $url_page = "php/created/page/url.php";
    $param1 = "This is a string with < >";
    $param2 = "££¡“] are bad characters";
    $linktext = "<Click> & learn more";

    $url = "http://localhost/";
    $url .= rawurlencode($url_page);
    $url .= "?" . "param1=" . urlencode($param1);
    $url .= "?" . "param2=" . urlencode($param2);
    ?>

    <a href="<?php echo htmlspecialchars($url); ?>"> <!-- Selve linket -->
    	<?php echo htmlspecialchars($linktext); ?> <!-- Den tekst der trykket på for at aktivere linket -->
    </a>
   
    </body>
</html>