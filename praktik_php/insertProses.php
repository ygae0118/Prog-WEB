<?php
	include "koneksi.php";

	$id=$_GET['id'];
	$nama=$_GET['nama'];
	$alamat=$_GET['alamat'];

	$sql="INSERT INTO mahasiswa (id, nama, alamat)
			VALUES('$id', '$nama', '$alamat')";

	if (mysqli_query($connect, $sql)) {

		echo "<br>Record Berhasil Ditambahkan<br>";
	}else{
		echo "Record Gagal Ditambahkan<br>" . mysqli_error($connect);
	}

	mysqli_close ($connect);
?>