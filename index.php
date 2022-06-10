<!DOCTYPE html>
<!Use Google Chrome to get better browse experience>
<!Icons in nav-bar are made by Freepik, Gregor Cresnar & Those Icons from www.flaticon.com>
<html>
<head>
<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 18
   
   Filename: index.html
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/x-icon" href="images/icon.ico" />
<title>ViewIT</title>
<link href="css/vi_layout.css" rel="stylesheet" type="text/css" />
<link href="css/vi_navbar.css" rel="stylesheet" type="text/css" />
<link href="css/vi_reset.css" rel="stylesheet" type="text/css" />
<link href="css/vi_mov.css" rel="stylesheet" type="text/css" />
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

<!-- after login -->
<?php
	if(isset($_COOKIE["login"])){ 
		$username = $_COOKIE["login"]; // get cookie data
		echo "<section class=\"content\">\n";
		echo "  <div class=\"description\">\n";
		echo "    <h1 class=\"summary\">ViewIT</h1>\n";
		echo "    <h2 class=\"summary\">Welcome Back: [$username]</h2>\n";
		echo "    <a class=\"button\" href=\"rate.php\">Rate Now</a>\n";
		echo "    <a class=\"button\" href=\"logout.php\">Logout</a>\n";
		echo "  </div>\n";
		echo "</section>";
	} else {    
?>
<!-- before login -->
<section class="content">
  <div class="description">
    <h1 class="summary">Welcome To ViewIT!!</h1>
    <h2 class="summary">Your Best Movie Website</h2>
	<section class="article">
	<h3>*Login to rate your favorite movie!!</h3>
	</section>
    <a class="button" href="login.html">Login Now</a>
    <a class="button" href="register.html">Register Now</a>
  </div>
</section>


<?php } ?>

<body>
<body background="images/bg.jpg">
<nav class="fixed-nav-bar">
  <div id="menu" class="menu">
    <a></a>
    <a class="show" href="#menu">Menu</a><a class="hide" href="#hidemenu">Menu</a>
    <ul class="menu-items">
      <li><a href="index.php" target=""><img src="images/icons.png" class="ic"></a></li>
	  <li><a href="movie.php" target=""><img src="images/moviedb.png" class="ic"></a></li>
	  <li><a href="search.php" target=""><img src="images/search.png" class="ic"></a></li>

  </ul>
  </div>
</nav>
	
<section class="article">
	<h2>Blockbuster Movie of December 2019</h2>
	<br>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Aladdin.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Angel_Has_Fallen.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Anna.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Avengers_Endgame.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Charlie's_Angles.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Fast_Furious_Presents_Hobbs_Shaw.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Ford_v_Ferrari.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Frozen2.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Joker.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Jumanji_The_Next_Level.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Rambo_Last_Blood.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Spider_Man_Far_from_Home.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/The_Irishman.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/The_Lion_King.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
	<div class="mov">
		<a target="_blank" href="movie.php">
		<img src="poster/Toy_Story_4.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
	
</section>

	<footer>
		<a href="https://www.facebook.com/"><img src="images/s1.png" align="left" class="s1"></a> <a href="https://www.google.com/"><img src="images/s2.png" align="left" class="s2"></a> ViewIT Website By James Chan<span> <a href='javascript: about()'>About</a> <a href='javascript: developer()'>Developers</a> <a href="#">Help</a> </span> 
    </footer>

</body>
</html>

<!--
<div class="mov">
		<<a target="_blank" href="movie.php">
		<img src="poster/.jpg" alt="Cinque Terre" width="600" height="400">
		</a>
		<div class="desc"></div>
	</div>
-->