<?php 
	function hello($name) {
		return "Hello {$name}!";
	}
?>

<?php 
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}
?>