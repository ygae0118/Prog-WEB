<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		session_start();

		if($_SESSION['status'] == 'login'){
			?>
			<br><a href="sessionLogout.php">Keluar</a> <?php
		}else{
			echo "Anda belum login, silahkan "; ?>
			<a href="sessionLoginForm.php">Masuk</a> <?php
		}
		?>
</body>
</html>