
<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$query="DELETE  FROM mahasiswa WHERE id='$id'";
	$result=mysqli_query($connect, $query);
	
	if ($result) {
		echo "Data Berhasil Dihapus";
	?>
	<a href="homeCRUD.php">Lihat Data Ditabel</a>

	<?php
		}else{
			echo "Data Gagal Dihapus" .mysqli_error($connect) ;
		}
	?>
