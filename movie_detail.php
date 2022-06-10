<!DOCTYPE html>
<!Use Google Chrome to get better browse experience>
<html>
<head>
<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 19
   
   Filename: movie_detail.php
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/x-icon" href="images/icon.ico" />
<title>ViewIT</title>
<link href="css/vi_table.css" rel="stylesheet" type="text/css" />
</head>
<div class="container">
<br>
<!-- php to show movie detail -->
<?php
	//phpinfo();
	$mysqli = new mysqli("localhost", "root", "", "moviedb");

	$sql = "select * from movies where movie_id=" . $_GET['id']; // SQL query to be issued
	$result = $mysqli->query($sql); // execute the query
	
	echo "<div class=\"center\">\n";
	for ($i = 0; $i < $result->num_rows; $i++) { // for each row
		$row = $result->fetch_assoc(); // get a particular row
		$movie_id = 0;
		foreach ($row as $key => $value) { // for each column
			if ($key == "id") {
				$movie_id = $value;
			}
			else if ($key == "image")
				echo "<p><img src=\"$value\" width=\"200px\" class=\"imgs\"/></p>";
			else if ($key == "title")
				echo "<p>Movie Name: $value</p>";
			else if ($key == "running_time")
				echo "<p>Running Time: $value</p>";
			else if ($key == "release_date")
				echo "<p>Release Date: $value</p>";
			else if ($key == "genre")
				echo "<p>Genre: $value</p>";
			else if ($key == "description")
				echo "<hr><p>Description:<p>$value</p></p><hr>";
			else
				echo "<p>$value</p>";
		}
	}
	
	$sqls = "SELECT round(AVG(rating),1)  FROM `ratings` WHERE movie_id =" . $_GET['id']; // sql query to average the rate 
	$result = $mysqli->query($sqls); // execute the query
	for ($i = 0; $i < $result->num_rows; $i++) { // for each row
		$row = $result->fetch_assoc(); // get a particular row
		$movie_id = 0;
		foreach ($row as $key => $value) {
			echo "<h2>Rating : $value Star</h2>";// for each column
		}
	}
	
?>
	
<?php
	
	if(isset($_COOKIE["login"])){
	$username = $_COOKIE["login"]; //get cookie data
	echo"<a href=\"rate.php\" class=\"sbutton\">RATE IT</a>"; //button to rate page
	echo"<a href=\"search.php\" class=\"sbutton\">Back To Search</a>"; // button back to search page
	echo"<a href=\"movie.php\" class=\"sbutton\">Back To Database</a>"; //button back to movie database
	echo "</div>\n";
	} else {
		 
	echo"<a href=\"search.php\" class=\"sbutton\">Back To Search</a>"; // button back to search page
	echo"<a href=\"movie.php\" class=\"sbutton\">Back To Database</a>"; //button back to movie database
	echo "</div>\n";
?>

<?php } ?>

</div>
</body>
</html>