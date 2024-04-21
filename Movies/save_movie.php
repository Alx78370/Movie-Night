<?php
require_once '../Other/connec.php';
require_once '../Other/functionDeKiki.php';
$pdo = new \PDO(DSN, USER, PASS);

$missingids = findMissingId('movies', $pdo);
$newMovieName = $_POST['movie_name'];
$newMovieDate = $_POST['movie_release_date'];
$newMovieDirector = $_POST['movie_director'];
$newMovieGrade = $_POST['movie_imdb_grade'];
$newMovieSynopsis = $_POST['movie_synopsis'];
$newMovieCover = $_POST['movie_cover'];

if ($missingids != []) {
    $queryNewMovie = "INSERT INTO movies (id, name, release_date, directors_id, imdb_grade, synopsis, cover) VALUES (:id, :newMovieName, :newMovieDate, :newMovieDirector, :newMovieGrade, :newMovieSynopsis, :newMovieCover)";
    $statement = $pdo->prepare($queryNewMovie);
    $statement->bindvalue(':id', $missingids[0], \PDO::PARAM_INT);
    $statement->bindvalue(':newMovieName', $newMovieName, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieDate', $newMovieDate, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieDirector', $newMovieDirector, \PDO::PARAM_INT);
    $statement->bindvalue(':newMovieGrade', $newMovieGrade, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieSynopsis', $newMovieSynopsis, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieCover', $newMovieCover, \PDO::PARAM_STR);
    $statement->execute();
} else {
    $queryNewMovie = "INSERT INTO movies (name, release_date, directors_id, imdb_grade, synopsis, cover) VALUES (:newMovieName, :newMovieDate, :newMovieDirector, :newMovieGrade, :newMovieSynopsis, :newMovieCover)";
    $statement = $pdo->prepare($queryNewMovie);
    $statement->bindvalue(':newMovieName', $newMovieName, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieDate', $newMovieDate, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieDirector', $newMovieDirector, \PDO::PARAM_INT);
    $statement->bindvalue(':newMovieGrade', $newMovieGrade, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieSynopsis', $newMovieSynopsis, \PDO::PARAM_STR);
    $statement->bindvalue(':newMovieCover', $newMovieCover, \PDO::PARAM_STR);
    $statement->execute();
}



//JE RECUPERE TOUS LES GENRES QU'IL Y A DANS LA TABLE

$query = "SELECT * FROM genres";
$statement = $pdo->query($query);
$genres = $statement->fetchAll(PDO::FETCH_ASSOC);

//JE DECLARE UN TABLEAU VIDE QUI PRENDRA LES VALEURS QUI SONT CHECKED

$newMovieGenre = [];
foreach ($genres as $genre) {
    if (isset($_POST[$genre['name']])) {
        array_push($newMovieGenre, $_POST[$genre['name']]);
    } else {
    }
}

// JE RECUPERE L'ID DU FILM QUI VIENT D'ETRE AJOUTE

if ($missingids != []) {
    $movie_id = $missingids[0];
} else {
    $querylastMovieId = "SELECT id FROM movies ORDER BY id desc LIMIT 1";
    $statement = $pdo->query($querylastMovieId);

    //JE RECUPERE LA VALEUR DANS LE TABLEAU ET NON LE TABLEAU

    $movie_id = $statement->fetch(PDO::FETCH_ASSOC)['id'];
}


$querygenre = "INSERT INTO movies_genres (genres_id, movies_id) VALUES (:genre_id, :movie_id)";
foreach ($newMovieGenre as $genre) {
    $statement = $pdo->prepare($querygenre);
    $statement->bindvalue(':genre_id', $genre, \PDO::PARAM_INT);
    $statement->bindvalue(':movie_id', $movie_id, \PDO::PARAM_INT);
    $statement->execute();
}


header("location:../Movies/list_movies.php");
