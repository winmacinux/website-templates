<?php

	class DatabaseConnect {
		public function __construct($db_host, $db_username, $db_password, $user_db){
			if(!@$this->Connect($db_host, $db_username, $db_password, $user_db)){
				echo 'Connection failed';
				}else if($this->Connect($db_host, $db_username, $db_password, $user_db)){
					echo 'Connected to Database';
				}
		}

		public function Connect($db_host, $db_username, $db_password, $user_db){

			if(!@mysqli_connect($db_host, $db_username, $db_password, $user_db)){
				return false;
			}else{
				return true;
			}
		}
	}

	$connection = new DatabaseConnect('localhost','root','ravi','clickatcareer');

?>