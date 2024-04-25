<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

if (!isset($_SESSION['username'])) {
    header("location:../Other/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="backgroundAccueil">
    <div class="cardDetailCart">
        <h1>Your cart details</h1><br>
        <?php foreach ($_SESSION['panier'] as $movieAddedInCart) {
            $query = "SELECT id, name, cover, release_date FROM movies WHERE id = :movieAddedInCart";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':movieAddedInCart', $movieAddedInCart, \PDO::PARAM_INT);
            $statement->execute();
            $movieAddedInCart = $statement->fetch(); ?>
            <div class="listCart">
                <img src="../Movies/movie_cover/<?= $movieAddedInCart['cover'] ?>" alt="movie_cover" style="width: 15%; height: auto;">
                <p class="cartMovieTitle"><?= $movieAddedInCart['name'] . ' ' . '(' . $movieAddedInCart['release_date'] . ')' ?></p>
                <p>x1</p>
                <a href="../Other/delete_cart.php?movie_id=<?= $movieAddedInCart['id'] ?>" class="btn btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M6.854 6.146 8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 1 1 .708-.708" />
                    </svg>
                </a>
            </div><?php
                } ?>
    </div>

</body>

</html>
<?php
