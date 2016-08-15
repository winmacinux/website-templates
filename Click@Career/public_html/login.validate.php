<?php
class login{
	var $username;
	var $password;

	public function __construct($usernm, $pwd ){
		$this->username = $usernm;
		$this->password = $pwd;

	}

	public function check(){
		$query = "SELECT * FROM 'Users' WHERE 'Email'=".$this->username." AND 'Password'=".$this->password; 
		echo "$query";	
	
		if($query_run = mysql_query($query)){
			if(mysql_num_rows($query_run) == NULL){
				echo 'Invalid Username or Password.';
			}else{
				echo 'You have been logged in.';
			}
		}
	}

}

$login = new login('ravi','sharma');
$login->check();




?>