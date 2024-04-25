<?php
include '../Other/header.php';

require_once '../Other/connec.php';
$pdo = new \PDO(DSN, USER, PASS);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="backgroundAccueil">
    <div class="cardForm">
        <h1>Log in</h1><br>
        <div class="form">
            <form method="post" action="../Other/save_login.php">
                <label class="form-label" for="user_name">Pseudo:</label>
                <input class=" form-control" type="text" id="user_name" name="user_name" required><br>
                <label class="form-label" for="user_password">Password:</label>
                <input class=" form-control" type="password" id="user_password" name="user_password"><br>
                <input type="submit" class="w-25 btn btn-primary" value="Log in" name="login">
            </form>
        </div>
    <p>Or</p>
    <a href="../Other/create_user.php" class="w-25 btn btn-primary">Create an account</a>
    </div>
</body>

</html>