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
			session_unset();
			session_destroy();

			echo "All Session Variables are now removed, and the Session is destroyed.";
		?>
	</body>
	</html>