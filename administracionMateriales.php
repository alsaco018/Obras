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
            <div align='center' >
    <form>
    <input type='submit' class='btn btn-danger' formaction='crearMaterial.php' value='Crear material'>
    <input type='submit' class='btn btn-danger' formaction='administrador.php' value='Volver al menú de administración'>
    </form>
  </div>
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
    echo "<div class=' table-responsive'><table class='table table-dark table-hover'><thead><tr><th>Editar</th><th>Eliminar</th><th>Id</th><th>     Nombre    </th><th>Precio (€)</th><th>Peso (kg)</th><th>Altura (cm)</th><th>Anchura (cm)</th><th>Profundidad (cm)</th><th>Proveedor </th><th></th><th>Descripción</th></tr></thead>";
    while($registro = mysqli_fetch_array($result)){
        echo "<form action='' method='POST'><tbody><tr><td><input type='submit' class='btn btn-danger' formaction='editarObras.php' value='Editar'></td><td><input type='submit' class='btn btn-danger' formaction='borrarObras.php' value='Borrar'></td><td><input type='text' size='3' value='".$registro['Material_ID']."' id='id' name='id' disabled></td><td><input type='text' value='".$registro['Material_Nombre']."' id='nombre' name='nombre'><td><input type='text' value='".$registro['Material_Precio']."' id='precio' name='precio'></td><td><input type='text' value='".$registro['Material_Peso']."' id='peso' name='peso'></td><td><input type='text' value='".$registro['Material_Dimensiones_alto']."' id='altura' name='altura'></td><td><input type='text' value='".$registro['Material_Dimensiones_ancho']."' id='anchura' name='anchura'></td><td><input type='text' value='".$registro['Material_Dimensiones_profundo']."' id='profundidad' name='profundidad'></td><td colspan='2'><select name='proveedor' id='proveedor' class='form-control' style='width: 250px;'>";
        
        $sql2 = "select * from proveedores where Proveedor_ID = ".$registro['Material_Proveedor_ID'];
        //password_hash($password, PASSWORD_DEFAULT);
        $result2 = mysqli_query($db,$sql2) or die("Problemas en el select 2".mysqli_error($db));
        $nRegistros2 = mysqli_num_rows($result2);
        while($registro2 = mysqli_fetch_array($result2)){
            echo "<option value='".$registro2['Proveedor_ID']."' selected>".$registro2['Proveedor_Nombre']."</option>";
        }
        $sql3 = "select * from proveedores";
        //password_hash($password, PASSWORD_DEFAULT);
        $result3 = mysqli_query($db,$sql3) or die("Problemas en el select 3".mysqli_error($db));
        $nRegistros3 = mysqli_num_rows($result3);
        while($registro3 = mysqli_fetch_array($result3)){
            echo "<option value='".$registro3['Proveedor_ID']."' selected>".$registro3['Proveedor_Nombre']."</option>";
        }
        echo "</select></td><td><input type='text' value='".$registro['Material_Descripcion']."' id='descripcion' name='descripcion'></td></tr></tbody></form>";

    }
    echo "</table></div><br><br> ";
?>
</body>
</html>