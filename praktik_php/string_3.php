<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Sorting Array</h2>

<?php
	$rawstring = "Welcome Birminghan Parent. Your replacement is pleasure to have!";

	$malestr = str_replace("replacement", "son", $rawstring);
	$femalestr = str_replace("replacement", "daughter", $rawstring);

	echo "Son: ". $malestr. "<br>";
	echo "Daughter: ". $femalestr. "<br>";
?>
</body>
</html> 