<?php
	$target_path	=	"uploads/";
	
	$target_path	=	$target_path . basename(
	$_FILES['uploadedfile']['name']);

	if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) {
		echo "The File " . basename($_FILES['uploadedfile']['name']) . " Has Been Uploaded";
	}else{
		echo "There Was an Error Uploading the File, Please Try Again !!";
	}
?>