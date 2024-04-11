<?php
include 'header.php';

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';
$movie_id = $_GET['movie_id'];
$queryMovie = "SELECT m.name, m.release_date, d.first_name, d.last_name FROM movies m JOIN directors d ON d.id = m.directors_id  WHERE m.id = :movie_id";
$statement = $pdo->prepare($queryMovie);
$statement->bindvalue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$movie = $statement->fetch(PDO::FETCH_ASSOC);
echo "Movie name: " . $movie['name'] . BR . "Release date: " . $movie['release_date'] . BR . "Director: " . $movie['first_name'] . ' ' . $movie['last_name'] . BR;

$queryGenres = "SELECT GROUP_CONCAT(g.name SEPARATOR ', ' ) AS groupGenre FROM genres g JOIN movies_genres m_g ON m_g.genres_id = g.id JOIN movies m ON m_g.movies_id = m.id WHERE m.id = :movie_id GROUP BY m.id;";
$statement = $pdo->prepare($queryGenres);
$statement->bindvalue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$genre = $statement->fetch(PDO::FETCH_ASSOC);
echo "Genre: " . $genre['groupGenre'];