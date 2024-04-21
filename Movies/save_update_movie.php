<?php
include '../Other/header.php';
require_once '../Other/functionDeKiki.php';
require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$movie_id = $_GET['movie_id'];
$updateMovieName = $_POST['movie_name'];
$updateMovieDate = $_POST['movie_release_date'];
$updateMovieDirector = $_POST['movie_director'];
$updateMovieGrade = $_POST['movie_imdb_grade'];
$updateMovieSynopsis = $_POST['movie_synopsis'];
$updateMovieCover = $_POST['movie_cover'];

$queryMovie = "SELECT * FROM movies WHERE id = :movie_id";
$statement = $pdo->prepare($queryMovie);
$statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$movie = $statement->fetch(PDO::FETCH_ASSOC);

if ($updateMovieName !== $movie['name']) {
    $sql = "UPDATE movies SET name = :updateMovieName WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieName', $updateMovieName, \PDO::PARAM_STR);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateMovieDate !== $movie['release_date']) {
    $sql = "UPDATE movies SET release_date = :updateMovieDate WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieDate', $updateMovieDate, \PDO::PARAM_STR);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateMovieDirector !== $movie['directors_id']) {
    $sql = "UPDATE movies SET directors_id = :updateMovieDirector WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieDirector', $updateMovieDirector, \PDO::PARAM_INT);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateMovieGrade !== $movie['imdb_grade']) {
    $sql = "UPDATE movies SET imdb_grade = :updateMovieGrade WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieGrade', $updateMovieGrade, \PDO::PARAM_STR);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateMovieSynopsis !== $movie['synopsis']) {
    $sql = "UPDATE movies SET synopsis = :updateMovieSynopsis WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieSynopsis', $updateMovieSynopsis, \PDO::PARAM_STR);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateMovieGrade !== $movie['imdb_grade']) {
    $sql = "UPDATE movies SET imdb_grade = :updateMovieGrade WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieGrade', $updateMovieGrade, \PDO::PARAM_STR);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if (isset($updateMovieCover)) {
    $sql = "UPDATE movies SET cover = :updateMovieCover WHERE id = :movie_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateMovieCover', $updateMovieCover, \PDO::PARAM_STR);
    $statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}


$query = "SELECT * FROM genres";
$statement = $pdo->query($query);
$genres = $statement->fetchAll(PDO::FETCH_ASSOC);
$checkedMovieGenres = [];

foreach ($genres as $genre) {
    if (isset($_POST[$genre['name']])) {
        array_push($checkedMovieGenres, $_POST[$genre['name']]);
    } else {
    }
}

$queryMovieGenres = "SELECT genres.id, genres.name FROM genres JOIN movies_genres ON genres.id = movies_genres.genres_id JOIN movies ON movies_genres.movies_id = movies.id WHERE movies_id = :movie_id";
$statement = $pdo->prepare($queryMovieGenres);
$statement->bindValue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$movieGenres = $statement->fetchAll(PDO::FETCH_ASSOC);


$statement = $pdo->prepare("DELETE FROM movies_genres WHERE movies_id = :movie_id");
$statement->bindvalue(':movie_id', $movie_id, PDO::PARAM_INT);
$statement->execute();
$statement = $pdo->query("ALTER TABLE movies_genres AUTO_INCREMENT = 1");

$missingids = findMissingId('movies_genres', $pdo);
$compteur = 0;
foreach ($checkedMovieGenres as $checkedMovieGenre) {
    if ($missingids == []) {
        $queryNewGenre = "INSERT INTO movies_genres (genres_id, movies_id) VALUES (:genre_id, :movie_id)";
        $statement = $pdo->prepare($queryNewGenre);
    } else {
        $queryNewGenre = "INSERT INTO movies_genres (id, genres_id, movies_id) VALUES (:id, :genre_id, :movie_id)";
        $statement = $pdo->prepare($queryNewGenre);
        $statement->bindvalue(':id', $missingids[$compteur], \PDO::PARAM_INT);
    }
    $statement->bindvalue(':genre_id', $checkedMovieGenre, \PDO::PARAM_INT);
    $statement->bindvalue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
    $compteur++;
}

header("location:../Movies/list_movies.php");
