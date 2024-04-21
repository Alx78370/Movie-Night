<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';

$query = "SELECT * FROM directors";
$statement = $pdo->query($query);
$directors = $statement->fetchAll();

?>

<body class="backgroundAccueil">

    <div class="cardList">
        <div class="d-grid gap-2 col-3 mx-auto">
            <a href="../Directors/create_director.php" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg> Add a new director</a>
        </div>

        <?php
        foreach ($directors as $idDirector => $director) { ?>
            <div class="movie">
                <a href="../Directors/detail_director.php?director_id=<?= $director['id'] ?>" class="list-group-item list-group-item-action">
                    <img src="../Directors/image_director/<?= $director['picture'] ?>" alt="image_director" style="width: 30%; height: auto;">
                    <div>
                        <?= $director['first_name'] . ' ' . $director['last_name'] . ' ' ?>
                    </div>
                </a>
                <div class="btn_movie">
                    <a href="../Directors/update_director.php?director_id=<?= $director['id'] ?>" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg> Update</a>
                    <a class="btn btn-danger" href="../Directors/delete_director.php?director_id=<?= $director['id'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x-fill" viewBox="0 0 16 16">
                            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708" />
                        </svg> Delete</a>
                </div>
                <br>
            </div>
        <?php
        }
        ?>

    </div>
</body>