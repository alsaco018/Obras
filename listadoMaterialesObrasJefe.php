<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Administración de Obras</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="assets/css/logIn.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
    body{
        background:#1c1d26;
        color: #e44c65;
    }
    input{
        background:transparent;
        color: #e44c65;
    }
    button {
        color: #1c1d26;
        background-color:#e44c65
    }
  #error{
    color:red;
  }
  </style>
</head>
<body>
<header id="header" class="alt" style="margin-top:5%;">
						<nav id="nav">
            <div align="center">
            
              <a href="index.php" style="text-decoration: none; color:white;"><i class="fa fa-home" style="transform:scale(4,4);"></i></a>
              
            </div>
            <br>
              <h2 align="center">Home</h2>
						</nav>
          </header>
          <br><br><br>
          <div class="container">
            <form method="POST" action="">
            <select name='obra' id='obra' class='form-control'>
<?php
include('dbConfig.php');
session_start();

$db or
    die("Connection failed: ");
    $sql = "select * from obras where Obra_jefe = ".$_SESSION['id'];
    //password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
    $nRegistros = mysqli_num_rows($result);
    while($registro = mysqli_fetch_array($result)){
        echo "<option value='".$registro['Obra_id']."'>".$registro['Obra_nombre']."</option>";
    }
    echo "</select><br><br><select name='material' id='material' class='form-control'>";
    $sql2 = "select * from materiales";
    //password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db,$sql2) or die("Problemas en el select 0".mysqli_error($db));
    $nRegistros = mysqli_num_rows($result);
    while($registro = mysqli_fetch_array($result)){
        echo "<option value='".$registro['Material_ID']."'>".$registro['Material_Nombre']."</option>";
    }
    echo "</select><br><br><label for='cantidad'>Cantidad</label><br><input type='number' name='cantidad' id='cantidad' min='1' max='50'><br><br><label for='fecha'>Fecha</label><br><input type='date' name='fecha' id='fecha'><br><br><input type='submit' class='btn btn-danger' formaction='agregarMaterialObra.php' value='Agregar el material a la obra'>"
?>
    </body>
</html>