<html>
<head>
<!--
   ViewIT Website		
   Date:   2019 - 11 - 21
   
   Filename: movie.php
-->
<link rel="icon" type="image/x-icon" href="images/icon.ico" />
<title>ViewIT</title>
<link href="css/vi_table.css" rel="stylesheet" type="text/css" />
<link href="css/vi_navbar.css" rel="stylesheet" type="text/css" />
<link href="css/vi_reset.css" rel="stylesheet" type="text/css" />
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

<body>
<!-- nav-bar of the website -->
<nav class="fixed-nav-bar">
  <div id="menu" class="menu">
    <a></a>
    <a class="show" href="#menu">Menu</a><a class="hide" href="#hidemenu">Menu</a>
    <ul class="menu-items">
      <li><a href="index.php" target=""><img src="images/homep.png" class="ic"></a></li>
	  <li><a href="movie.php" target=""><img src="images/moviedb.png" class="ic"></a></li>
	  <li><a href="search.php" target=""><img src="images/search.png" class="ic"></a></li>
  </ul>
  </div>
</nav>
<br>
<br>
<br>
<!-- create movie database in website -->
<!-- after login -->
<?php
	if(isset($_COOKIE["login"])){
	$username = $_COOKIE["login"]; //get cookie data
	
	$mysqli = new mysqli("localhost", "root", "", "moviedb");

	$sql = "select * from movies"; // SQL query to be issued
	$result = $mysqli->query($sql); // execute the query

	echo "<table class=\"container\">\n"; //table of movie
		echo "<thead>\n";
		echo "<th><h3>ViewIT Movie Database</h3></th>\n";
		echo "</tr>";
			echo "<thead>\n";
				echo "<tr>\n";
					echo "<th><h1>Movie</h1></th>\n";
					echo "<th><h1>Running time</h1></th>\n";
					echo "<th><h1>Release Date</h1></th>\n";
					echo "<th><h1>Genre</h1></th>\n";
					echo "<th><h1>Movie Detail</h1></th>\n";
					echo "<th><h1>Rate IT</h1></th>\n";
				echo "</tr>";
	for ($i = 0; $i < $result->num_rows; $i++) { // for each row
		$row = $result->fetch_assoc(); // get a particular row
		echo "<tbody>\n";
		echo "<tr>";
		$movie_id = 0;
		foreach ($row as $key => $value) { // for each column
			if ($key == "movie_id") {
				$movie_id = $value;
				continue;
			}
			else if ($key == "description")
				continue;
			else if ($key == "image")
				echo "<td><a href=\"movie_detail.php?id=$movie_id\"><img src=\"$value\" width=\"50px\"/></a></td>";
			else
				echo "<td>$value</td>";
		}
		echo "<td><a href=\"rate.php?id=$movie_id\">RATE</a></td>";
		echo "</tr>";
		echo "</tbody>\n";
	}
	echo "</table>";
	} else {    
?>

<!-- before login -->		
<?php
	//phpinfo();
	$mysqli = new mysqli("localhost", "root", "", "moviedb");

	$sql = "select * from movies"; // SQL query to be issued
	$result = $mysqli->query($sql); // execute the query

	echo "<table class=\"container\">\n"; //table of movie
		echo "<thead>\n";
		echo "<th><h3>ViewIT Movie Database</h3></th>\n";
		echo "</tr>";
			echo "<thead>\n";
				echo "<tr>\n";
					echo "<th><h1>Movie</h1></th>\n";
					echo "<th><h1>Running time</h1></th>\n";
					echo "<th><h1>Release Date</h1></th>\n";
					echo "<th><h1>Genre</h1></th>\n";
					echo "<th><h1>Movie Detail</h1></th>\n";
					echo "<th><h1>Login to rate</h1></th>\n";
				echo "</tr>";
	for ($i = 0; $i < $result->num_rows; $i++) { // for each row
		$row = $result->fetch_assoc(); // get a particular row
		echo "<tbody>\n";
		echo "<tr>";
		$movie_id = 0;
		foreach ($row as $key => $value) { // for each column
			if ($key == "movie_id") {
				$movie_id = $value;
				continue;
			}
			else if ($key == "description")
				continue;
			else if ($key == "image")
				echo "<td><a href=\"movie_detail.php?id=$movie_id\"><img src=\"$value\" width=\"50px\"/></a></td>";
			else
				echo "<td>$value</td>";
		}
		echo "<td>RATE</td>";
		echo "</tr>";
		echo "</tbody>\n";
	}
	echo "</table>";
	echo "<a href=\".php\"></a>"
?>

<?php } ?>

<!-- footer of the website -->
<footer class="dfooter">
		<a href="https://www.facebook.com/"><img src="images/s1.png" align="left" class="s1"></a> <a href="https://www.google.com/"><img src="images/s2.png" align="left" class="s2"></a> ViewIT Website By James Chan<span> <a href='javascript: about()'>About</a> <a href='javascript: developer()'>Developers</a> <a href="#">Help</a> </span> 
    </footer>
</body>
</html>