<?php 
	require_once 'db_helper.php';

	final class db_project extends db_helper{
		function show_category(){
			return parent::select("ca_id,ca_name","sms_category","1 order by ca_name asc");
		}
		
		function show_group(){
			return parent::select("gr_id,gr_name","sms_group","1 order by gr_name asc");
		}
		
		function show_person(){
			return parent::select("per_grid,per_name,per_mobile","person_contact","1 order by per_name asc");
		}
		
		function show_msg(){
			return parent::select("sms_caid,sms_msg","sms_message","1 order by sms_id asc");
		}
		
		function show_details($extra =""){
			return parent::select("per_name,per_mobile,per_id","person_contact","per_grid='$extra'");
		}
		
		function show_smsdetails($extra =""){
			return parent::select("sms_id,sms_msg,sms_caid","sms_message","sms_caid='$extra'");
		}
	}

	$obj = new db_project();

?>