<?php
include 'header.php';

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';

$query = "SELECT * FROM genres";
$statement = $pdo->query($query);
$genres = $statement->fetchAll();

foreach ($genres as $idgenre => $genre) { ?>
    <a href="detail_genre.php?genre_id=<?= $genre['id']?>"><?= $genre['name']  . ' ' ?></a><a class="btn btn-danger" href="delete_genre.php?movie_id=<?= $genre['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x-fill" viewBox="0 0 16 16">
            <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708" />
        </svg> Delete</a><br>
<?php
}
