<?php
include 'header.php';

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';
$genre_id = $_GET['genre_id'];
$query_genre = "SELECT g.name AS genre, GROUP_CONCAT(m.name SEPARATOR ', ') AS movieGroup FROM movies m JOIN movies_genres m_g ON m_g.movies_id = m.id JOIN genres g ON m_g.genres_id = g.id WHERE g.id = :genre_id GROUP BY g.id;";
$statement = $pdo->prepare($query_genre);
$statement->bindvalue(':genre_id', $genre_id, \PDO::PARAM_INT);
$statement->execute();
$genre = $statement->fetch(PDO::FETCH_ASSOC);
echo $genre['genre'] . ' ' . "Movies: " . $genre['movieGroup'];