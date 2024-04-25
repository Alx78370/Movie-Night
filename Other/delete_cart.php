<?php
session_start();

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$movieId = $_GET['movie_id'];

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($movieId)) {
    $key = array_search($movieId, $_SESSION['panier']);
    if ($key !== false) {
        unset($_SESSION['panier'][$key]);
        $_SESSION['panier'] = array_values($_SESSION['panier']);
    }
}
header("location:../Other/detail_cart.php");
exit;
