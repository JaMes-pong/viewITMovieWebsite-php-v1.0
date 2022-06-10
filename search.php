<!DOCTYPE html>
<!Use Google Chrome to get better browse experience>
<html>
<head>
<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 23
   
   Filename: search.php
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/x-icon" href="images/icon.ico" />
<title>ViewIT</title>
<link href="css/vi_table.css" rel="stylesheet" type="text/css" />
<link href="css/vi_navbar.css" rel="stylesheet" type="text/css" />
<link href="css/vi_reset.css" rel="stylesheet" type="text/css" />
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

<body>

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

<!-- form of search -->
<form class="search" action="search.php" method="GET">
	<br>
	<br>
	<br>
		<!-- get keyword -->
		Search: 
		<input type="text" name="keywords" autocomplete="off" placeholder="Search by title or genre">
	<input type="submit" value="Search">
</form>

<!-- start search -->
<?php

$mysqli = new mysqli("localhost", "root", "", "moviedb");

	if(isset($_GET['keywords'])) {
		$keywords = $mysqli->escape_string($_GET['keywords']);
		$query = $mysqli->query("select * from movies where title LIKE '%{$keywords}%' OR genre LIKE '%{$keywords}%'"); //search data in database 
		$getid = $mysqli->query("select movie_id from movies where title LIKE '%{$keywords}%' OR genre LIKE '%{$keywords}%'");
?>

<!-- echo how many result found in database -->
<div class="search">
	Found <?php echo $query->num_rows; ?> results. 
</div>

<!-- show the result of search -->
<?php

if($query->num_rows) {
	while($r = $query->fetch_object()) {
		?>
			<div class="search">
				<a href="<?php echo "http://localhost/php/movie_detail.php?id=".$r->movie_id; ?>"><?php echo $r->title; ?></a> <!-- link the movie -->
			</div>
		<?php
	}
}
	}
	?>
	
	<footer class="dfooter">
		<a href="https://www.facebook.com/"><img src="images/s1.png" align="left" class="s1"></a> <a href="https://www.google.com/"><img src="images/s2.png" align="left" class="s2"></a> ViewIT Website By James Chan<span> <a href='javascript: about()'>About</a> <a href='javascript: developer()'>Developers</a> <a href="#">Help</a> </span> 
    </footer>
</body>
</html>