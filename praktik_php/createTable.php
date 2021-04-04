<?php
	$namaHost="localhost";
	$usename="root";
	$password="";
	$database="praktikumdb";

	$connect=mysqli_connect($namaHost, $usename, $password, $database);
	if($connect){
		echo "Koneksi dengan MySQL berhasil";
	}else{
		echo "Koneksi denga MySQL gagal".mysqli_connect_error();
	}

	$sql="CREATE DATABASE mahasiswa(
			id INT PRIMARY KEY,
			nama VARCHAR(30) NOT NULL,
			alamat VARCHAR(50) NOT NULL)";

	if (mysqli_query($connect, $sql)) {
		echo "<br>Tabel Berhasil DIbuat";
	}
	else{
		echo "Tabel gagal Dibuat<br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>