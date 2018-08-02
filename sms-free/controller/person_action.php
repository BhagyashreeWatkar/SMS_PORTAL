<?php
	require_once '../afterlogin.php';	
	//pre($_POST);
	
	if(empty($_POST['per_grid'])){
		echo "Plz select Group";
	}	
	else if(chk_alpha($_POST['per_name'])!=1){
		echo "Invalid Name";
	}
	else if(chk_digit($_POST['per_mobile'],10)!=1){
		echo "Invalid Mobile no.";
	}
	else{
		//echo 1;
		$gr_id = $_REQUEST['per_grid'];
		//pre($gr_id);
		
		
		$result = $obj->select("count(*) as cnt","person_contact","per_grid='$gr_id'");
		//pre($result);
		
		$obj->insert("person_contact");
		echo 1;
	}
?>