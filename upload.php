<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if($fileType != "txt"){
    		echo "Sorry, only txt files are allowed.";
    		$uploadOk = 0;
	}
	else
    	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
?>