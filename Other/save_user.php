<?php
require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$newUserName = $_POST['user_name'];
$newUserPassword = $_POST['user_password'];

$queryNewUser = "INSERT INTO user (user_name, user_password) VALUES (:newUserName, :newUserPassword)";
$statement = $pdo->prepare($queryNewUser);
$statement->bindvalue(':newUserName', $newUserName, \PDO::PARAM_STR);
$statement->bindvalue(':newUserPassword', $newUserPassword, \PDO::PARAM_STR);
$statement->execute();

header("Location:../Other/login.php");