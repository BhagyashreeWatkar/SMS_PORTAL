<?php 
	require_once '../model/db_project.php';
	
	//pre($_POST);

	if(chk_email($_POST['log_email'])!=1){
		echo "Invalid Email";
	}
	else if(chk_pass($_POST['log_pass'],"4,10")!=1){
		echo "Invalid Password";
	}
	else{
		//echo 1;
		$email = $_REQUEST['log_email'];
		
		$ans = $obj->select("log_name,log_mobile,log_pass","sms_login","log_email='$email'");
		//pre($ans);
		
		if($ans==0){
			echo "Email id does not exists";
		}
		else{
			if($ans[0]->log_pass == sha1($_REQUEST['log_pass'])){
				
				$_SESSION['for_email'] = $email;
				$_SESSION['for_name'] = $ans[0]->log_name;
				$_SESSION['for_mobile'] = $ans[0]->log_mobile;
				
				echo 1;
			}
			else{
				echo "User Credential";
			}
		}
		
	}
?>