<?php
session_start();
require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$movieId = $_GET['movie_id'];

if (!isset($_SESSION['username'])) {
    header("location:../Other/login.php");
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($movieId)) {
    if(!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }
    if (!in_array($movieId, $_SESSION['panier'])) {
        $_SESSION['panier'][] = $movieId;
    }
    header('Location:../Movies/list_movies.php');
}
exit;

