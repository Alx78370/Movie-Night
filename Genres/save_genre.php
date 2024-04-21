<?php
require_once '../Other/connec.php';
require_once '../Other/functionDeKiki.php';
$pdo = new \PDO(DSN, USER, PASS);

$missingids = findMissingId('genres', $pdo);
$newGenreName = $_POST['genre_name'];

if ($missingids != []) {
    $queryNewGenre = "INSERT INTO genres (id, name) VALUES (:id, :newGenreName)";
    $statement = $pdo->prepare($queryNewGenre);
    $statement->bindvalue(':newGenreName', $newGenreName, \PDO::PARAM_STR);
    $statement->bindvalue(':id', $missingids[0], \PDO::PARAM_INT);
    $statement->execute();
} else {
    $queryNewGenre = "INSERT INTO genres (name) VALUES (:newGenreName)";
    $statement = $pdo->prepare($queryNewGenre);
    $statement->bindvalue(':newGenreName', $newGenreName, \PDO::PARAM_STR);
    $statement->execute();
}

header("location:../Genres/list_genres.php");
