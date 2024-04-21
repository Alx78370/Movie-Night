<?php

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$genre_id = $_GET['genre_id'];

$statement = $pdo->prepare("DELETE FROM movies_genres WHERE genres_id = :genre_id");
$statement->bindvalue(':genre_id', $genre_id, PDO::PARAM_INT);
$statement->execute();

$statement = $pdo->prepare("DELETE FROM genres WHERE id = :genre_id");
$statement->bindvalue(':genre_id', $genre_id, PDO::PARAM_INT);
$statement->execute();

$statement = $pdo->query("ALTER TABLE movies_genres AUTO_INCREMENT = 1");
$statement = $pdo->query("ALTER TABLE genres AUTO_INCREMENT = 1");

header("location:../Genres/list_genres.php");
