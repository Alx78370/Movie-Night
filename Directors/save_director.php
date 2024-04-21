<?php
require_once '../Other/connec.php';
require_once '../Other/functionDeKiki.php';
$pdo = new \PDO(DSN, USER, PASS);

$missingids = findMissingId('directors', $pdo);
$newDirectorFirstname = $_POST['first_name'];
$newDirectorLastname = $_POST['last_name'];
$newDirectorBirthdate = $_POST['birth_date'];
$newDirectorBiography = $_POST['director_biography'];
$newDirectorPicture = $_POST['director_picture'];

if ($missingids != []) {
    $queryNewDirector = "INSERT INTO directors (id, first_name, last_name, birth_date, biography, picture) VALUES (:id, :newDirectorFirstname, :newDirectorLastname, :newDirectorBirthdate, :newDirectorBiography, :newDirectorPicture)";
    $statement = $pdo->prepare($queryNewDirector);
    $statement->bindvalue(':newDirectorFirstname', $newDirectorFirstname, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorLastname', $newDirectorLastname, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorBirthdate', $newDirectorBirthdate, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorBiography', $newDirectorBiography, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorPicture', $newDirectorPicture, \PDO::PARAM_STR);
    $statement->bindvalue(':id', $missingids[0], \PDO::PARAM_INT);
    $statement->execute();
} else {
    $queryNewDirector = "INSERT INTO directors (first_name, last_name, birth_date, biography, picture) VALUES (:newDirectorFirstname, :newDirectorLastname, :newDirectorBirthdate, :newDirectorBiography, :newDirectorPicture)";
    $statement = $pdo->prepare($queryNewDirector);
    $statement->bindvalue(':newDirectorFirstname', $newDirectorFirstname, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorLastname', $newDirectorLastname, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorBirthdate', $newDirectorBirthdate, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorBiography', $newDirectorBiography, \PDO::PARAM_STR);
    $statement->bindvalue(':newDirectorPicture', $newDirectorPicture, \PDO::PARAM_STR);
    $statement->execute();
}


header("location:../Directors/list_directors.php");
