<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$nama=$_GET['nama'];
	$alamat=$_GET['alamat'];

	$query="UPDATE mahasiswa SET nama='$nama', alamat='$alamat' WHERE id='$id'";
	$result=mysqli_query($connect, $query);

	if(result){
		echo "Berhasil update data ke database"
?>
	<a href="homeCRUD.php">Lihat Data Di Tabel</a>
	<?php
}else{
	echo "Gagal Update Data" . mysqli_connect($connect);
}
?>