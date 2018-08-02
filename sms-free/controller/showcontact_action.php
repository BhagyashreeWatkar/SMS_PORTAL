<?php
	require_once '../model/db_project.php';
	
	$grid = $_REQUEST['gr_id'];
	// pre($grid);
	$result = $obj->show_details($grid);
	// pre($result);
	
	if(is_array($result))
	{
		foreach($result as $val)
		{
			echo "<span style=\"cursor:pointer\" onclick=\"show_contact('$val->per_name','$val->per_mobile')\"> $val->per_name </span>";
			echo "<br/>";
		}
	}
	else
	{
		echo "Create contact first <a href=\"add-contact.php\">Click here</a>";
	}
?>

<script type="text/javascript">
	function show_contact(name,mobile){
		document.getElementById('per_name').value = name;
		document.getElementById('per_mobile').value = mobile;
	}
</script>