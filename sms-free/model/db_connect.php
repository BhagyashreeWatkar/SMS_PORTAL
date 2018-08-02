<?php 
	require_once 'db_parameter.php';

	abstract class db_connect implements db_parameter{
		protected $conn = '';

		function __construct(){
			require_once 'helper.php';

			if(session_id()==""){
				session_start();
			}


			$this->conn = new mysqli(self::HOST,self::USER,self::PASS,self::DB);
		}

		function __destruct(){
			$this->conn->close();
		}
	}
?>