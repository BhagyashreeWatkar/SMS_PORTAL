<?php
	session_start();	
	if(isset($_SESSION['for_name'])):
	header("location:index.php");
	endif;
?>