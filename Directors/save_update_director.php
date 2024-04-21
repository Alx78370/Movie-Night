<?php
include '../Other/header.php';
require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$director_id = $_GET['director_id'];
$updateDirectorFirstname = $_POST['first_name'];
$updateDirectorLastname = $_POST['last_name'];
$updateDirectorBirthDate = $_POST['birth_date'];
$updateDirectorBiography = $_POST['director_biography'];
$updateDirectorPicture = $_POST['director_picture'];

$queryDirector = "SELECT * FROM directors WHERE id = :director_id";
$statement = $pdo->prepare($queryDirector);
$statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
$statement->execute();
$director = $statement->fetch(PDO::FETCH_ASSOC);

if ($updateDirectorFirstname !== $director['first_name']) {
    $sql = "UPDATE directors SET first_name = :updateDirectorFirstname WHERE id = :director_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateDirectorFirstname', $updateDirectorFirstname, \PDO::PARAM_STR);
    $statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateDirectorLastname !== $director['last_name']) {
    $sql = "UPDATE directors SET last_name = :updateDirectorLastname WHERE id = :director_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateDirectorLastname', $updateDirectorLastname, \PDO::PARAM_STR);
    $statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateDirectorBirthDate !== $director['birth_date']) {
    $sql = "UPDATE directors SET birth_date = :updateDirectorBirthDate WHERE id = :director_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateDirectorBirthDate', $updateDirectorBirthDate, \PDO::PARAM_STR);
    $statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if ($updateDirectorBiography !== $director['biography']) {
    $sql = "UPDATE directors SET biography = :updateDirectorBiography WHERE id = :director_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateDirectorBiography', $updateDirectorBiography, \PDO::PARAM_STR);
    $statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

if (isset($updateDirectorPicture)) {
    $sql = "UPDATE directors SET picture = :updateDirectorPicture WHERE id = :director_id";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':updateDirectorPicture', $updateDirectorPicture, \PDO::PARAM_STR);
    $statement->bindValue(':director_id', $director_id, \PDO::PARAM_INT);
    $statement->execute();
} else {
}

header("location:../Directors/list_directors.php");
