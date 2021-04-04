<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Sorting Array</h2>

<?php
	$age = array(
		"Joe" =>"29",
		"Elsa"=>"27",
		"Kevin"=>"32",
		"Nick"=>"24",
		"Olaf"=>"9",
		"Ana"=>"17"
	);
	arsort($age);

	foreach ($age as $name => $value) {
		echo "name = " . $name . ", age = ". $value . " <br> ";
	};
?>
</body>
</html> 