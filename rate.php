<!DOCTYPE html>
<!Use Google Chrome to get better browse experience>
<html>
<head>
<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 24
   
   Filename: rate.php
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/x-icon" href="images/icon.ico" />
<title>ViewIT</title>
<link href="css/vi_table.css" rel="stylesheet" type="text/css" />
<link href="css/vi_footer.css" rel="stylesheet" type="text/css" />
</head>

<script type="text/javascript">
/*js for footer website about*/ 
function about() {
  alert("ViewIT Website. 2019 DIT4202 Assignment");
}

/*js for footer website developer*/
function developer() {
  alert("ViewIT Website. Develop by Chan Wai Pong James 180609303");
}
</script>

<!-- php of rating -->
<?php
	
	// exchange movie title to movie_id
	$mysqli = new mysqli("localhost", "root", "", "moviedb"); 
	$title = $_POST['movie'];
	$sql = "select movie_id from movies where title='$title'";
	$result = $mysqli->query($sql);
	while($rows = $result->fetch_assoc()){
		$movie_id = $rows['movie_id']; //get movie_id
	}
	
	//exchange username to user_id
	$mysqli = new mysqli("localhost", "root", "", "moviedb");
	$username = $_COOKIE["login"];
	$sql = "select user_id from users where username='$username'";
	$result = $mysqli->query($sql);
	while($rows = $result->fetch_assoc()){
		$user_id = $rows['user_id']; //get user_id
	}
	
	//check the user has rate the movie or not  
	$mysqli = new mysqli("localhost", "root", "", "moviedb");
	$sql = "select users.user_id from users inner join ratings on
			users.user_id = ratings.user_id inner join movies on 
			movies.movie_id = ratings.movie_id
			WHERE ratings.user_id ='$user_id' AND ratings.movie_id = '$movie_id';";
	$result = $mysqli->query($sql);
	while($rows = $result->fetch_assoc()){
		$usera = $rows['user_id']; //get check result
	}
	
	//start insert the rating result of movie
	$user_id_again = false;
	$rating_empty = false;
	if (isset($_POST['submit'])) {
		if ($_POST['rating']=="")
			$rating_empty = true;
		if ($user_id=="$usera")
			$user_id_again = true;
		if (!$rating_empty && !$user_id_again) {
			// connect to database
			$pdo = new PDO("mysql:host=localhost;dbname=moviedb", "root", "");
			// construct SQL query
			$sql = "INSERT INTO ratings (user_id, movie_id, rating) VALUES (:user_id, :movie_id, :rating)";
			// prepare the query
			$stmt = $pdo->prepare($sql);
			// execute the query
			$result = $stmt->execute(array(
				':user_id' => $user_id,
				':movie_id' => $movie_id,
				':rating' => $_POST['rating'],
			));
			$message = "Rating successful, Thank you!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		} else {
			$message = "Repeat Rating, Please rate another movie!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
	
<!-- form of rating -->
<form method="post" action="rate.php" class="rate">
<div class="form-group">
<h2>Rate the movie you want NOW!</h2>
<!-- php of movie menu -->
<?php
	
	$mysqli = new mysqli("localhost", "root", "", "moviedb");

	$sql = "select title from movies";
	$result = $mysqli->query($sql);
?>
<p>Movie:</p>
<div class="select">
<select name="movie">

<?php
	while($rows = $result->fetch_assoc()){
		$title = $rows['title'];
		echo "<option name='title' value='$title'>$title</option>"; //insert movie data to menu
	}
	?>	
</select><br>
	<p>Your Rating:</p>
	<select name="rating">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select><br><br>
<input type="submit" name="submit" value="Submit" class="sbutton">
<a href="index.php" class="sbutton">Back Home Page</a>
</div>
</div>
</form>
<footer class="dfooter">
		<a href="https://www.facebook.com/"><img src="images/s1.png" align="left" class="s1"></a> <a href="https://www.google.com/"><img src="images/s2.png" align="left" class="s2"></a> ViewIT Website By James Chan<span> <a href='javascript: about()'>About</a> <a href='javascript: developer()'>Developers</a> <a href="#">Help</a> </span> 
    </footer>
</body>
</html>