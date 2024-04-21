<?php

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$movie_id = $_GET['movie_id'];

$statement = $pdo->prepare("DELETE FROM movies_genres WHERE movies_id = :movie_id");
$statement->bindvalue(':movie_id', $movie_id, PDO::PARAM_INT);
$statement->execute();

$statement = $pdo->prepare("DELETE FROM movies WHERE id = :movie_id");
$statement->bindvalue(':movie_id', $movie_id, PDO::PARAM_INT);
$statement->execute();

$statement = $pdo->query("ALTER TABLE movies_genres AUTO_INCREMENT = 1");
$statement = $pdo->query("ALTER TABLE movies AUTO_INCREMENT = 1");


header("location:../movies/list_movies.php");
