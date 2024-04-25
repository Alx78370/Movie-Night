<?php  
 session_start(); 

 include '../Other/header.php';
 require_once '../Other/connec.php';
 $pdo = new \PDO(DSN, USER, PASS);

 if(isset($_SESSION["username"]))  
 {  ?>
    <body class="backgroundAccueil">
        <div class="cardForm">
            <h1>Login Success, Welcome - <?=$_SESSION["username"]?></h1>
            <br /><br /><a class="btn btn-primary" href="../Other/logout.php">Logout</a>
        </div>
    </body>
    <?php
 }  
 else  
 {  
      header("location:../Other/login.php");  
 }  
 ?>  