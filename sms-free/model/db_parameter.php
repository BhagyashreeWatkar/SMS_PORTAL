<?php 
	interface db_parameter{
		const HOST = 'p:localhost';
		const USER = 'root';
		const PASS = '';
		const DB = 'demo-sms';

		function insert($table);
		function select($col,$table,$condition);
		function update($table,$records,$condition);
		function delete();
		function clean_msg($msg);
		function dropdown($col,$table,$condition,$type);
	}
?>