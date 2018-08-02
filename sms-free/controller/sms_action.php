<?php
	require_once '../model/db_project.php';
	
	if(chk_alpha($_POST['per_name'])!=1){
		echo 'Invalid Name';
	}
	else if(chk_digit($_POST['per_mobile'],10)!=1){
		echo 'Invalid Mobile No.';
	}
	else if(strlen($_REQUEST['me_name'])<1 || strlen($_REQUEST['me_name'])>300){
		echo "Invalid Message";
	}
	else{
		//echo 'Message Send Successfully.';
		echo 1;
	}
?>