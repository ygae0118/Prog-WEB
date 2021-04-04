<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$_SESSION["favcolor"] = "Black";
		$_SESSION["favanimal"] = "Panda";
		echo "Session variables are SET.";
	?>
</body>
</html>