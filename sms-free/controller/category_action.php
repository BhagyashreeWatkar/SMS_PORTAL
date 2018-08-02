<?php
	require_once '../afterlogin.php';
	
	if(chk_alpha($_POST['ca_name'])!=1){
		echo "Invalid Category Name";
	}
	else{
		$name = $_POST['ca_name'];
		
		$result = $obj->select("count(*) as cnt","sms_category","ca_name='$name'");
		//pre($result);
		
		if($result[0]->cnt==1){
			echo "Category Exits";
		}
		else{
			$obj->insert('sms_category');
			echo 1;
		}
	}
?>