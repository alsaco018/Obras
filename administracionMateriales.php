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
<?php
include('dbConfig.php');
session_start();

$db or
    die("Connection failed: ");
    $sql = "select * from materiales";
    //password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
    $nRegistros = mysqli_num_rows($result);
    echo "<div class=' table-responsive'><table class='table table-dark table-hover'><thead><tr><td>Editar</td><td>Eliminar</td><td>Id</td><td>     Nombre    </td><td>Dirección</td><td>Jefe</td><td>Latitud</td><td>Longitud</td><td>Cliente</td></tr></thead>";
    while($registro = mysqli_fetch_array($result)){
        echo "<form action='' method='POST'><tbody><tr><td><input type='submit' class='btn btn-danger' formaction='editarObras.php' value='Editar'></td><td><input type='submit' class='btn btn-danger' formaction='borrarObras.php' value='Borrar'></td><td><input type='text' value='".$registro['Material_ID']."' id='id' name='id' disabled></td><td><input type='text' value='".$registro['Material_Nombre']."' id='nombre' name='nombre'><td><input type='text' value='".$registro['Material_Precio']."' id='precio' name='precio'></td><td><input type='number' value='".$registro['Material_Peso']."' id='peso' name='peso'></td><td><input type='text' value='".$registro['Material_Dimensiones_alto']."' id='altura' name='altura'></td><td><input type='text' value='".$registro['Material_Dimensiones_ancho']."' id='anchura' name='anchura'></td><td><input type='text' value='".$registro['Material_Dimensiones_profundo']."' id='profundidad' name='profundidad'></td><td><input type='text' value='".$registro['Material_Proveedor_ID']."' id='proveedor' name='proveedor'></td><td><input type='text' value='".$registro['Material_Foto']."' id='foto' name='foto'></td><td><input type='text' value='".$registro['Material_Descripcion']."' id='descripcion' name='descripcion'></td></tr></tbody></form>";

    }
    echo "</table></div><br><br> <div align='center' >
    <form>
    <input type='submit' class='btn btn-danger' formaction='crearObra.php' value='Crear Obra'>
    <input type='submit' class='btn btn-danger' formaction='trabajadoresObra.php' value='Agregar trabajadores a obra'>
    </form>
  </div> ";
?>
</body>
</html>