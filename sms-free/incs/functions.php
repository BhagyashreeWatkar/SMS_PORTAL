<?php
	function active_item($file_name, $active_item, $class) {
		if(basename($file_name) == $active_item) {
			return 'class="'.$class.'"';
		}
	}
	
					
	function siteURL() {
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domainName = $_SERVER['HTTP_HOST'];
		return $protocol.$domainName;
	}
	
	define( 'SITE_URL', siteURL() );

?>