<?php
include '../Other/header.php';
vies:
require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';
$movie_id = $_GET['movie_id'];
$queryMovie = "SELECT m.name, m.release_date, m.imdb_grade, m.synopsis, m.cover,d.id as directorId, d.first_name, d.last_name, d.picture FROM movies m JOIN directors d ON d.id = m.directors_id  WHERE m.id = :movie_id";
$statement = $pdo->prepare($queryMovie);
$statement->bindvalue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$movie = $statement->fetch(PDO::FETCH_ASSOC);

$queryGenres = "SELECT g.id, g.name FROM genres g JOIN movies_genres m_g ON m_g.genres_id = g.id JOIN movies m ON m_g.movies_id = m.id WHERE m.id = :movie_id";
$statement = $pdo->prepare($queryGenres);
$statement->bindvalue(':movie_id', $movie_id, \PDO::PARAM_INT);
$statement->execute();
$genres = $statement->fetchall(PDO::FETCH_ASSOC);

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
        <img src="../Movies/movie_cover/<?= $movie['cover'] ?>" alt="movie_cover" style="width: 40%; height: 50%;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="title_date_movie">
                    <h1><?= $movie['name'] ?></h1>
                    <p>(<?= $movie['release_date'] ?>)</p>
                </div>
            </li>
            <li class="list-group-item">
                <p><?= $movie['synopsis'] ?></p>
            </li>
            <li class="list-group-item" style="align-items: center;">
                Director:
                <a href="../Directors/detail_director.php?director_id=<?= $movie['directorId'] ?>" class="director"><?= $movie['first_name'] . ' ' . $movie['last_name']?> <img style="width:30%; border-radius:10px; margin-left:10%" src="../Directors/image_director/<?= $movie['picture'] ?> " alt="director_picture"></a>
            </li>
            <li class="list-group-item">
            Genre(s):
                <?php foreach ($genres as $genre) { ?>
                    <a href="../Genres/detail_genre.php?genre_id=<?=($genre['id']) ?>" class="genre"> <?= $genre['name'] ?></a>
                <?php } ?>
                
            </li>
            <li class="list-group-item">
                <div class="rating">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                    </svg>
                    <?= $movie['imdb_grade'] ?>
                    <img class="imdb_icon" src="../Other/images_deco/icon imdb.png" alt="imdb icon">
                </div>
            </li>
        </ul>
        <div>
</body>

</html>