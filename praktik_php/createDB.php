<?php
	$namaHost="localhost";
	$usename="root";
	$password="";

	$connect=mysqli_connect($namaHost,$usename,$password);
	if($connect){
		echo "Koneksi dengan MySQL berhasil";
	}else{
		echo "Koneksi denga MySQL gagal".mysqli_connect_error();
	}

	$sql="CREATE DATABASE praktikumdb";
	if (mysqli_query($connect, $sql)) {
		echo "<br>Database Berhasil DIbuat";
	}
	else{
		echo "Database gagal Dibuat<br>". mysqli_error($connect);
	}
	mysqli_close($connect);
?>