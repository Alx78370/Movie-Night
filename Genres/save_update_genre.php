<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$genre_id = $_GET['genre_id'];
$updateGenreName = $_POST['genre_name'];

$queryGenre = "SELECT * FROM genres WHERE id = :genre_id";
$statement = $pdo->prepare($queryGenre);
$statement->bindValue(':genre_id', $genre_id, \PDO::PARAM_INT);
$statement->execute();
$genre = $statement->fetch(PDO::FETCH_ASSOC);

if ($updateGenreName !== $genre['name']) {
    $sql = "UPDATE genres SET name = :updateGenreName WHERE id = :genre_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateGenreName', $updateGenreName, \PDO::PARAM_STR);
    $statement->bindValue(':genre_id', $genre_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

header("location:../Genres/list_genres.php");
