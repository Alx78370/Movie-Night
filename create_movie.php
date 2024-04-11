<?php
include 'header.php';

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);
?>
<h1>Add a new movie</h1>
<form action="create_movie.php" method="post">
        <label for="name">Movie name:</label>
        <input type="text" name="name" id="movie_name" placeholder="movie" required>
        <label for="date">Release date:</label>
        <input type="number" min="1900" max="2099" step="1" name="date" id="movie_release_date" placeholder="year" required>
        <input type="submit" value="Add a movie">
    </form>
<?php
const BR = '<br/>';
$newMovieName = $_POST['movie_name'];
$newMovieDate = $_POST['movie_release_date'];

$querryNewMovie = "INSERT INTO movies (movies.name, movies.release_date) VALUES (':newMovieName', ':newMovieDate');";
$statement = $pdo->prepare($queryNewMovie);
$statement->bindvalue(':newMovieName', $newMovieName, \PDO::PARAM_STR);
$statement->bindvalue(':newMovieDate', $newMovieDate, \PDO::PARAM_INT);
$statement->execute();

header("location:list_movies.php");
exit;
?>