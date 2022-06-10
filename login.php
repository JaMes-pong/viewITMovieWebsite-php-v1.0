<!--
   ViewIT Website	
   Date:   2019 - 11 - 19
   
   Filename: login.php
-->
<!-- php of user login -->
<?php
	// check if the form is submitted
	if (isset($_POST['login'])) { 
		$username = $_POST['username']; //get username
		$password = $_POST['password']; //get password
		$db = new PDO("mysql:host=localhost;dbname=moviedb", "root", "");
		$sql = "select username, password from users where username='$username'"; //sql query
		$res = $db->query($sql);
		$row = $res->fetch();
		$db_password = $row['password'];
		if ($row && $password == $db_password) {
			// login successful
			setcookie("login", $username, time()+3600); //setcookie
		} else {
			// login error
			$message = "Username OR Password NOT EXIST, Please try again";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>

<html>
    <head>
        <meta http-equiv="refresh" content="0;url=loading.html" />
    </head>
</html>
