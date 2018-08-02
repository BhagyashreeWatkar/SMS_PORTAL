<?php 
	require_once 'db_connect.php';

	abstract class db_helper extends db_connect{
		
		function insert($table){
			//echo 1111;
			$data = $_REQUEST;
			//pre($data);

			$val = "'".implode("','", $data)."'";
			//pre($val);
			$keydata = array_keys($data);

			//pre($keydata);

			$key = implode(",",$keydata);
			//pre($key);

			// query preparation

			$str = "insert into $table ($key) value ($val)";
			// echo $str;
			// pre($this->conn);


			// query Execute

			$this->conn->query($str) or die ($this->conn->error);


		}

		function select($col,$table,$condition){
			//echo 111;
			
			$str = "select $col from $table where $condition";
			//pre($str);
			
			$ans = $this->conn->query($str) or die ($this->conn->error);
			//pre($ans);
			
			if($ans->num_rows==0){
				return 0;
			}
			else{
				//echo 999;
				
				while($result = $ans->fetch_object()){
					//pre($result);
					
					$data[]= $result;
				}
				
				return $data;
			}
		}

		function update($table,$records,$condition){
			//query preparation
			$str = "update $table set $records where $condition";
			//echo $str;		
			
			//query execute			
			$this->conn->query($str) or die ($this->conn->error);
			
		}

		function delete(){}
		
		
		function clean_msg($msg)
		{
			return $this->conn->real_escape_string(strip_tags(trim($msg)));
		}


		function dropdown($col,$table,$condition,$type){
			$result = explode(",",$col);
			// pre($result);

			$str = "<select name='$type'>";
			$str = $str . "<option value=''> please select </option>";

			$ans = self::select($col,$table,$condition);
			//pre($ans);

			if(is_array($ans)):
				foreach ($ans as $key => $value) {
					$str = $str . "<option value='".$value->$result[0]."'>".$value->$result[1]."</option>";
				}
			else:
				$str = $str."<option value=''> No record</option>";
			endif;
				$str = $str."</select>";
				//$str.="</select>";
				echo $str;
		}

	}
	
?>