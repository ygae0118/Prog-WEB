
	<?php
	if (isset($_GET["nama"]) AND isset($_GET["email"])){
		$nama=$_GET["nama"];
		$email=$_GET["email"];
		$komentar=$_GET["komentar"];
		$isi_form="&nama=$nama&email=$email$komentar=$komentar";
	}else{
		header("Location:form_3.php?error=Variabel Belum Diset");
	}if (empty($nama)){
		header("Location:form_3.php?error=Nama Kosong ".$isi_form);
	}else if (!preg_match("/^[a-zA-Z]*$/", $nama)) {
		header("Location:form_3.php?error=Nama Invalid ".$isi_form);
	}else if(empty($email)) {
		header("Location:form_3.php?error=Email Kosong ".$isi_form);
	}else if (empty($email)) {
		header("Location:form_3.php?error=Email Kosong ".$isi_form);
	}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location:form_3.php?error=Email Invalid ".$isi_form);
	}else {
		echo "Nama : $nama <br> E-Mail : $email <br> Komentar : $komentar";
	}
	?>
