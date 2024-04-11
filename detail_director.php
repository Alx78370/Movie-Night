<?php
include 'header.php';

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';
$director_id = $_GET['director_id'];
$query_director = "SELECT first_name, last_name, birth_date, GROUP_CONCAT(m.name SEPARATOR ', ' ) AS filmography FROM directors JOIN movies m ON m.directors_id = directors.id WHERE directors.id = :director_id GROUP BY directors.id;";
$statement = $pdo->prepare($query_director);
$statement->bindvalue(':director_id', $director_id, \PDO::PARAM_INT);
$statement->execute();
$director = $statement->fetch(PDO::FETCH_ASSOC);
echo "Director: " . $director['first_name'] . ' ' . $director['last_name'] . BR . "Birth Date: " . $director['birth_date'] . BR . "Filmography: " . $director['filmography'];
