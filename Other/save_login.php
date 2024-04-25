<?php
session_start();
require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$userName = $_POST['user_name'];
$userPassword = $_POST['user_password'];
$errorMessage = '';

if (isset($_POST['login'])) {
    if (empty($userName) || empty($userPassword)) {
        $errorMessage = 'All fields are required';
    } else {
        $query = "SELECT * FROM user WHERE user_name = :userName AND user_password = :userPassword";  
        $statement = $pdo->prepare($query);
        $statement->bindvalue(':userName', $userName, \PDO::PARAM_STR);
        $statement->bindvalue(':userPassword', $userPassword, \PDO::PARAM_STR);   
        $statement->execute();
        $count = $statement->rowCount();
        if($count > 0){
            $_SESSION['username'] = $userName;
            header("location:../Other/login_success.php");
        }
    }
} else {
        $errorMessage = 'Please enter your user name and password !';
}

