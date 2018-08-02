<?php 
	require_once '../model/db_project.php';
	
	//pre($_POST);

	if(chk_alpha($_POST['log_name'])!=1){
		echo "Invalid Name";
	}
	else if(chk_email($_POST['log_email'])!=1){
		echo "Invalid Email";
	}
	else if(chk_digit($_POST['log_mobile'],10)!=1){
		echo "Invalid Mobile No.";
	}
	else if(chk_pass($_POST['log_pass'],"4,10")!=1){
		echo "Invalid Password";
	}
	else if($_POST['log_pass']!=$_POST['log_cpass']){
		echo "Invalid Current Password";
	}
	else{
		//echo 1;

		unset($_REQUEST['log_cpass']);

		$_REQUEST['log_pass'] = sha1($_REQUEST['log_pass']);

		//pre($_REQUEST);

		$obj->insert('sms_login');

		echo 1;
	}
?>