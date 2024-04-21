<?php

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$director_id = $_GET['director_id'];

$statement = $pdo->prepare("DELETE FROM directors WHERE id = :director_id");
$statement->bindvalue(':director_id', $director_id, PDO::PARAM_INT);
$statement->execute();

$statement = $pdo->query("ALTER TABLE directors AUTO_INCREMENT = 1");


header("location:../Directors/list_directors.php");
exit;
