<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Fungsi count()</h2>

<?php
	$menu = array("rawwon", "sate", "nasi goreng");
	$arrLength = count($menu);

	echo "menu hari ini adalah : <br>";
	for ($x=0; $x < $arrLength ; $x++) { 
		echo $menu[$x] . "<br>";
	}
		echo "<br> Saya Lapar, Saya ingin Makan ". "<b>$menu[2]</b>";
?>

</body>
</html> 