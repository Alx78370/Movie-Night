<?php    
 session_start();  
 unset($_SESSION['username']);
 header("location:../Other/login.php");  
 ?>  