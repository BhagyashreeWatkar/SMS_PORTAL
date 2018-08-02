<?php
	require_once '../afterlogin.php';
	
	//pre($_POST);
	
	if(empty($_POST['sms_caid'])){
		echo "Plz select cotegory";
	}
	else if(strlen($_REQUEST['sms_msg'])<1 || strlen($_REQUEST['sms_msg'])>300){
		echo "Invalid Message";
	}
	else{
		//echo "New Message added";
		$ca_id = $_POST['sms_caid'];
		// pre($ca_id);
		
		//$sms_message = $_POST['sms_msg'];
		
		$result = $obj->select("count(*) as cnt","sms_message","sms_caid='$ca_id'");
		// pre($result);	
		
		$obj->insert("sms_message");
		echo 1;
		
	}
?>