<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';
$director_id = $_GET['director_id'];
$query_director = "SELECT first_name, last_name, birth_date, biography, picture FROM directors  WHERE directors.id = :director_id";
$statement = $pdo->prepare($query_director);
$statement->bindvalue(':director_id', $director_id, \PDO::PARAM_INT);
$statement->execute();
$director = $statement->fetch(PDO::FETCH_ASSOC);

$queryDirectorMovies = "SELECT GROUP_CONCAT(m.name SEPARATOR ', ' ) AS filmography FROM movies m JOIN directors ON m.directors_id = directors.id WHERE directors.id = :director_id GROUP BY directors.id";
$statement = $pdo->prepare($queryDirectorMovies);
$statement->bindvalue(':director_id', $director_id, \PDO::PARAM_INT);
$statement->execute();
$directorMovies = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="backgroundAccueil">
    <div class="cardDetail">
        <img src="../Directors/image_director/<?= $director['picture'] ?>" alt="director_picture" style="width: 40%; height: auto;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="title_date_movie">
                    <h1><?= $director['first_name'] . ' ' . $director['last_name'] ?></h1>
                </div>
            </li>
            <li class="list-group-item">
                <p>(<?= $director['birth_date'] ?>)</p>
            </li>
            <li class="list-group-item">
                <p><?= $director['biography'] ?></p>
            </li>
            <li class="list-group-item">
                <p>Filmography: <?= $directorMovies['filmography'] ?></p>
            </li>
        </ul>
        <div>
</body>

</html>