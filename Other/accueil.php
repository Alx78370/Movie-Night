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

    <div class="card">
        <h1>Movie Night</h1>
        <form action="login.php" method="POST">
            <label for="login">Login</label>
        </form>
    </div>


</body>

</html>