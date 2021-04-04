<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		$Tujuan = "Malang";

		echo "Mau Main Kemana ?". $Tujuan."<br>";
		echo "<br> Pesan :	";

		switch ($Tujuan) {
			case "Batu":
				echo "<b>Jangan Lupa Bawa Jaket </b>";
			break;
			case "Bandung":
				echo "<b>Awas Kalau Belanja Laper Mata </b>";
			break;
			case "Bali":
				echo "<b>Pake Subblock SPF 50 </b>";
			break;
			default:
				echo "<b>Ya Udeh Belajar Aja Sana</b>";
				break;
		}
	?>
</body>
</html>