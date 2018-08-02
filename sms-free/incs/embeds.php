<?php
	require_once 'functions.php';
	if($_SERVER['REMOTE_ADDR'] == '::1') {
		echo '<base href="http://localhost/projects/demo-sms/" />';
	} else {
		echo '<base href="'.SITE_URL.'/sms-free/" />';
	}
	// echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

	function active($page_name) {
		if(basename($_SERVER['PHP_SELF']) == $page_name) {
			echo 'class="active"';
		}
	}
?>
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/flexy-menu.css">
<link rel="stylesheet" href="assets/css/style.css">
