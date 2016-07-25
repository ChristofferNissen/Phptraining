<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Break</title>
    </head>
    <body>
    	
    	<?php 
    		for($count=0; $count <= 10; $count++) {
    			if($count == 5) {
    				break;
    			}
    			echo $count . ", ";
    		}
    	?>
    	<br />
    	<br />
    	<?php // loop insade a loop with break
    		
    		for ($i=0; $i <= 5; $i++) {
    			if ($i % 2 == 0) { continue(1); }
    			for ($k = 0; $k <= 5; $k++) {
    				if ($k == 3) { break(1); } // break(1) only breaks the current loop, the break(2) breaks both
    				echo $i . "-" . $k . "<br />";
    			}
    		}
    	?>
   
    </body>
</html>