<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Switch statements</title>
    </head>
    <body>

    <?php 
    $a = 3; 

    switch ($a) {
        case '0':
            echo "a equals 0<br />";
            break;
        
        case '1':
            echo "a equals 1<br />";
            break;

        case '2':
            echo "a equals 2<br />";
            break;

        case '3':
            echo "a equals 3<br />";
            break;

        default:
           echo "a is none of the typical cases";
            break;
    }
    ?>

   
    </body>

</html>