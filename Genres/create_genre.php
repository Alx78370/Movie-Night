<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);
?>

<body class="backgroundAccueil">
    <div class="cardForm">
        <h1>Add a new genre</h1>
        <form action="../Genres/save_genre.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="genre_name">Genre name:</label>
                <input class="form-control" type="text" name="genre_name" id="genre_name" placeholder="genre" required><br>
                <input class="btn btn-primary" type="submit" value="Add a genre">
        </form>
    </div>
</body>