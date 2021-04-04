<!DOCTYPE html>
<html>
<head>
	<style>
		.error {color: #FF0000;}		
	</style>
</head>
<body>
	<?php
	if (isset($_GET['error'])) {
		$error=$_GET['error'];
	}else{
		$error="";
	}

	//siapkan pesan kesalahan
	$pesan="";
	if($error=="Variabel Belum Diset"){
		$pesan="Anda Harus Mengakses Halaman Ini Dari form_2.php";
	}else if ($error=="Nama Kosong") {
		$pesan="Nama Harus Diisi";
	}else if ($error=="Email Kosong"){
		$pesan="Email  Harus Diisi";
	}

	//Siapkan isian FORM Jika terjadi kesalahan
	if(isset($_GET["nama"]) AND isset($_GET["email"]) AND isset($_GET["komentar"])){
		$nama=$_GET["nama"];
		$email=$_GET["email"];
		$komentar=$_GET["komentar"];
	}else{
		$nama="";
		$email="";
		$komentar="";
	}
	?>

	<span class="error"> <?php echo $pesan; ?></span>

	<table>
	<form method="GET" action="prosesForm_2.php">
		<tr>
		<td>Nama :</td>
		<td> <input type="text" name="nama" value="<?php echo $nama;?>">  </td>
		</tr>
		<tr>
		<td>E-Mail :</td>
		<td> <input type="text" name="email" value="<?php echo $email;?>">  </td>
		</tr>
		<tr>
		<td>Komentar :</td>
		<td> <textarea name="komentar" rows="5" cols="40" > <?php echo $komentar;?>	</textarea> </td>
		</tr>
		<tr>
		<td> <input type="submit" name="kirim" value="Kirim"> </td>
		</tr>
	</form>
	</table>


</body>
</html>