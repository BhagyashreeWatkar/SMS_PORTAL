<?php
	require_once '../afterlogin.php';
	
	if(chk_alpha($_POST['gr_name'])!=1){
		echo "Invalid Group";
	}
	else{
		$name = $_POST['gr_name'];
		$result = $obj->select("count(*) as cnt","sms_group","gr_name='$name'");
		//pre($result);
		
		if($result[0]->cnt==1){
			echo "Group Exits";
		}
		else{
			$obj->insert('sms_group');
			echo 1;
		}
	}
?>