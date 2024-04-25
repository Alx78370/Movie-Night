<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$genre_id = $_GET['genre_id'];

$query_genre = "SELECT g.id, g.name as genre_name FROM genres g WHERE g.id = :genre_id";
$statement = $pdo->prepare($query_genre);
$statement->bindvalue(':genre_id', $genre_id, \PDO::PARAM_INT);
$statement->execute();
$genre = $statement->fetch(PDO::FETCH_ASSOC);

$query_movie = "SELECT m.id, m.name as movie_name FROM movies m JOIN movies_genres m_g ON m_g.movies_id = m.id JOIN genres g ON m_g.genres_id = g.id WHERE g.id = :genre_id";
$statement = $pdo->prepare($query_movie);
$statement->bindvalue(':genre_id', $genre_id, \PDO::PARAM_INT);
$statement->execute();
$genreMovies = $statement->fetchall(PDO::FETCH_ASSOC);
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
        <ul class="list-group list-group-flush" style="width: 100%;">
            <li class="list-group-item">
                <div class="title_date_movie">
                    <h1><?= $genre['genre_name'] ?></h1>    
                </div>
            </li>
            <li class="list-group-item" style="align-items: center;">
                <p>Movies:</p>
                <?php foreach($genreMovies as $genreMovie) { ?>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="../Movies/detail_movie.php?movie_id=<?=$genreMovie['id']?>"><?=$genreMovie['movie_name']?></a>
                        </li>
                    </ul>
                <?php } ?>
            </li>
        </ul>
        <div>
</body>

</html>