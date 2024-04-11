<?php 
include 'header.php';

require_once 'connec.php';
$pdo = new \PDO(DSN, USER, PASS);

const BR = '<br/>';
$movie_id = $_GET['movie_id'];
$pdo->exec("DELETE name FROM movies")