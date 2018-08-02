<?php
	require_once '../model/db_project.php';
	
	$caid = $_REQUEST['ca_id'];
	// pre($caid);
	//$smsname = $obj->clean_msg($name);
	//pre($smsname);
	//exit();
	$result = $obj->show_smsdetails($caid);
	
	if(is_array($result))
	{
		foreach($result as $val)
		{
			echo "<span style=\"cursor:pointer\" onclick=\"show_msg('$val->sms_msg')\"> $val->sms_msg </span>";
			echo "<br/>";
		}
	}
	else
	{
		echo "Create contact first <a href=\"create-message.php\">Click here</a>";
	}
?>
<script type="text/javascript">
	function show_msg(msg){
		document.getElementById('message').value = msg;
	}
</script>