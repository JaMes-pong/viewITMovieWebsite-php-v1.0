<!--
   ViewIT Website
   Author: Chan Wai Pong James		
   Date:   2019 - 11 - 20
   
   Filename: add_movie.php
-->

<!--Insert the movie data-->
<?php
	$title_empty = false;
	$genre_empty = false;
	$release_date_empty = false;
	if (isset($_POST['submit'])) { //check the form 
		if ($_POST['title']=="")
			$title_empty = true;
		if ($_POST['genre']=="")
			$genre_empty = true;
		if ($_POST['release_date']=="")
			$release_date_empty = true;
		if (!$title_empty && !$genre_empty) { //if data fulfill the requirement, start insert data 
			// connect to database
			$pdo = new PDO("mysql:host=localhost;dbname=moviedb", "root", "");
			// construct SQL query
			$sql = "INSERT INTO movies (title, description, running_time, release_date, genre, image) VALUES (:title, :description, :running_time, :release_date, :genre, :image)"; //mysql query
			// prepare the query
			$stmt = $pdo->prepare($sql);
			// execute the query
			$result = $stmt->execute(array(
				':title' => $_POST['title'],
				':description' => $_POST['description'],
				':running_time' => $_POST['running_time'],
				':release_date' => $_POST['release_date'],
				':genre' => $_POST['genre'],
				':image' => $_POST['image']
			));
			echo "<p>".$_POST['title']." added to Database<p>"; //tell the result
		}
	}
?>

<!-- form of insert movie data -->
<form method="post" action="add_movie.php"> 
<div class="form-group">
<p>Add a new movie information</p>
	Title: <input type="text" name="title" class="" required><br>
	Description: <textarea name="description"></textarea><br>
	Running Time: <input type="text" name="running_time" class="" placeholder="00:00:00"><br>
	Release Date: <input type="date" name="release_date" class="" required><br>
	Genre: <input type="text" name="genre" class="" required><br>
	Image: <input type="text" name="image" class="" placeholder="poster/movie_name.jpg"><br>
<input type="submit" name="submit" value="ADD" class="">
</div>
</form>
<a href="index.php">Back to Home Page</a>

</div>
