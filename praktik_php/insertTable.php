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

	$sql = "INSERT INTO mahasiswa(id, nama, alamat)
			VALUES('0001', 'George', 'malang'),('0002', 'Charlotte', 'malang'),('0003', 'Louis', 'surabaya')";

	if (mysqli_query($connect, $sql)) {
		echo "Record Berhasil Ditambahkan";
	}
	else{
		echo "Record Gagal Ditambahkan". mysqli_error($connect);
	}
	mysqli_close($connect);
?>