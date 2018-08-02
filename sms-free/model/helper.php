<?php 
	if(!function_exists('pre')){
		function pre($data){
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
	}

	if(!function_exists('chk_alpha')){
		function chk_alpha($data){
			//echo $data;
			$regexp = '/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/';
			return preg_match($regexp,$data);
		}
	}

	if(!function_exists('chk_email')){
		function chk_email($data){
			$regexp = '/^([a-z0-9][a-z0-9_\.]+[a-z0-9])@([a-z0-9][a-z0-9]+[a-z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/';
			return preg_match($regexp,$data);
		}
	}

	if(!function_exists('chk_digit')){
		function chk_digit($data,$len){
			$regexp = '/^[0-9]{'.$len.'}$/';
			return preg_match($regexp,$data);
		}
	}

	if(!function_exists('chk_pass')){
		function chk_pass($data,$len){
			$regexp = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!$%&@#_]).{'.$len.'}$/';
			return  preg_match($regexp,$data);
		}
	}
	
?>