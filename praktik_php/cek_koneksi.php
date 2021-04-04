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

?>