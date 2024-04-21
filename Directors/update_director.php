<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);
$director_id = $_GET['director_id'];

$queryDirector = "SELECT * FROM directors WHERE id = :director_id";
$statement = $pdo->prepare($queryDirector);
$statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
$statement->execute();
$director = $statement->fetch(PDO::FETCH_ASSOC);
?>

<body class="backgroundAccueil">
    <div class="cardForm">
        <h1>Update <?= $director['first_name'] . ' ' . $director['last_name'] ?></h1>
        <form action="../Directors/save_update_director.php?director_id=<?= $director['id'] ?>" method="post">
            <div class="mb-3">
                <label class="form-label" for="first_name">Director firstname:</label>
                <input class="form-control" type="text" name="first_name" id="first_name" value="<?= $director['first_name'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="last_name">Director lastname:</label>
                <input class="form-control" type="text" name="last_name" id="last_name" value="<?= $director['last_name'] ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="birth_date">Birth date:</label>
                <input class="form-control" type="date" name="birth_date" id="birth_date" value=<?= $director['birth_date'] ?> min="1900-01-01" max="2024-04-12" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="director_biography">Biography:</label>
                <textarea class="form-control" name="director_biography" id="director_biography" cols="50" rows="10"><?= $director['biography'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="director_picture" class="form-label">Add a director picture:</label>
                <input class="form-control" type="file" id="director_picture" name="director_picture">
            </div>
            <input class="btn btn-primary" type="submit" value="Add a director">
        </form>
    </div>
</body>