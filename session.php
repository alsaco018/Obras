<?php
   include('dbConfig.php');
   session_start();
   
   $nick = $_SESSION['usuario'];
   
   $ses_sql = mysqli_query($db,"select Usuario_nick from usuarios where Usuario_nick = '$nick' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['usuario'];
   
   if(!isset($_SESSION['usuario'])){
      header("location:signUp.php");
      die();
   }
?>