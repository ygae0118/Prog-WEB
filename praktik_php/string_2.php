<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Sorting Array</h2>

<?php
	$numberedString = "123456789012345678901234567890";
	$fivePos = strpos($numberedString, "5");
	echo "Posisi Angka 5 di Dalam String adalah $fivePos"; 
	$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
	echo "<br> Posisi Angka 5 yang kedua di Dalam String adalah $fivePos2";
?>
</body>
</html> 