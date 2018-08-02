<?php 
	require_once '../afterlogin.php';
	//pre($_POST);
	
	
	if(chk_pass($_POST['log_cpass'],'4,10')!=1){
		echo "Invalid Current Password";
	}
	
	else if(chk_pass($_POST['log_npass'],'4,10')!=1){
		echo "Invalid New Password";
	}
	else if($_POST['log_cnpass'] != $_POST['log_npass']){
		echo "Invalid Confirm New Password";
	}
	else if($_POST['log_cpass'] == $_POST['log_npass']){
		echo "Current Password and New Password should be diffrent";
	}
	else{
		//echo "Password Updated";
		
		$email = $_SESSION['for_email'];
		$result = $obj->select("log_pass","sms_login","log_email='$email'");
		//pre ($result);
		
		if($result[0]->log_pass == sha1($_POST['log_cpass'])){
			$newpass = sha1($_POST['log_npass']);
			
			$obj->update("sms_login","log_pass='$newpass'","log_email='$email'");
			
			echo "Password Updated";
		}
		else{
			echo "Invalid Current Password";
		}
		 
		 
		 
	}

?>