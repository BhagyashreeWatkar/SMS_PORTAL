<?php
	session_start();
	
	if(!isset($_SESSION['for_name'])):
		header("location:logout.php");
		
	endif;
	
	require_once 'model/db_project.php';
?>