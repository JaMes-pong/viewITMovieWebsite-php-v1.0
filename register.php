<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 19
   
   Filename: register.html
-->

<!-- php of register-->
<?php
	//get register data
	$id = ""; 
	$username = "";
	$password = "";
	$cpassword = "";
	$email = "";
	
	//check error
	$username_error = false;
	$password_error = false;
	$cpassword_error = false;
	$username_exist = false;
	$email_exist = false;
	
	if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["cpassword"]) && isset($_POST["email"])) { //start insert data to database
		$username = $_POST["username"];
		$password = $_POST["password"];
		$cpassword = $_POST["cpassword"];
		$email = $_POST["email"];
	}

	if (!$username_error && !$password_error && !$cpassword_error) { //if all ok start register
		$db = new pdo("mysql:host=localhost;dbname=moviedb", "root", "");

		//check username_exist
		$check_sql = "SELECT username FROM users WHERE username=:username";
		$check_stm = $db->prepare($check_sql);
		$check_res = $check_stm->execute(array(":username"=>$username));
		$check_row = $check_stm->fetch();
		if($check_row) {
			$message = "ERROR: Username already exists, please change to another one.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$username_exist = true;
		}
		
		//check email_exist
		$check_sql = "SELECT email FROM users WHERE email=:email";
		$check_stm = $db->prepare($check_sql);
		$check_res = $check_stm->execute(array(":email"=>$email));
		$check_row = $check_stm->fetch();
		if($check_row) {
			$message = "ERROR: Email already exists, please change to another one.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$email_exist = true;
		}
		
		if(!$username_exist && !$email_exist) {
			//insert record
			$sql = "insert into users values (:id,:username,:password,:email)";
			$statement = $db -> prepare($sql);
			$result = $statement -> execute(array(
				":id" => $id,
				":username" => $username,
				":password" => $password,
				":email" => $email
			));
		}
	}
		
?>

<html>
    <head>
        <meta http-equiv="refresh" content="0.01;url=loading.html" />
    </head>
</html>
