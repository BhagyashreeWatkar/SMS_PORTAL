<?php
	session_start();
	
	session_regenerate_id(true);
	
	unset ($_SESSION['for_name']);
	unset ($_SESSION['for_email']);
	unset ($_SESSION['for_mobile']);
	
	session_destroy();
	header("location:index.php");
?>