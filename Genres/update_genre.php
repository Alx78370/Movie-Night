<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$genre_id = $_GET['genre_id'];

$queryGenre = "SELECT * FROM genres WHERE id = :genre_id";
$statement = $pdo->prepare($queryGenre);
$statement->bindValue(':genre_id', $genre_id, \PDO::PARAM_INT);
$statement->execute();
$genre = $statement->fetch(PDO::FETCH_ASSOC);
?>

<body class="backgroundAccueil">
    <div class="cardForm">
        <h1>Update <?= $genre['name'] ?></h1>
        <form action="../Genres/save_update_genre.php?genre_id=<?= $genre_id ?>" method="post">
            <div class="mb-3">
                <label class="form-label" for="genre_name">Genre name:</label>
                <input class="form-control" type="text" name="genre_name" id="genre_name" value="<?= $genre['name'] ?>" required><br>
                <input class="btn btn-primary" type="submit" value="Update genre">
        </form>
    </div>
</body>