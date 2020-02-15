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
    <input type='submit' class='btn btn-danger' formaction='crearObra.php' value='Crear Obra'>
    <input type='submit' class='btn btn-danger' formaction='trabajadoresObra.php' value='Agregar trabajadores a obra'>
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
    $sql = "select * from obras";
    //password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
    $nRegistros = mysqli_num_rows($result);
    echo "<div class=' table-responsive'><table class='table table-dark table-hover'><thead><tr><td>Editar</td><td>Eliminar</td><td>Id</td><td>     Nombre    </td><td>Dirección</td><td>Jefe</td><td>Latitud</td><td>Longitud</td><td>Cliente</td><td>Foto</td></tr></thead>";
    while($registro = mysqli_fetch_array($result)){
      $id = $registro['Obra_id'];
        echo "<form action='' enctype='multipart/form-data' method='POST'><tbody><tr><td><input type='submit' class='btn btn-danger' formaction='editarObras.php' value='Editar'></td><td><input type='submit' class='btn btn-danger' formaction='borrarObras.php' value='Borrar'></td><td><input type='text' size='5' value='".$registro['Obra_id']."' id='id' name='id' disabled></td><td><input type='text' value='".$registro['Obra_nombre']."' id='nombre' name='nombre'><td><input type='text' value='".$registro['Obra_direccion']."' id='direccion' name='direccion'></td><td><select name='jefe' id='jefe' class='form-control' style='width: 250px;'>";
        
        $sql2 = "select * from usuarios where Usuario_id = ".$registro['Obra_jefe'];
        //password_hash($password, PASSWORD_DEFAULT);
        $result2 = mysqli_query($db,$sql2) or die("Problemas en el select 2".mysqli_error($db));
        $nRegistros2 = mysqli_num_rows($result2);
        while($registro2 = mysqli_fetch_array($result2)){
            echo "<option value='".$registro2['Usuario_id']."' selected>".$registro2['Usuario_apellido1']." ".$registro2['Usuario_apellido2'].", ".$registro2['Usuario_nombre']."</option>";
        }
        $sql3 = "select * from usuarios where Usuario_perfil = 'jefe'";
        //password_hash($password, PASSWORD_DEFAULT);
        $result3 = mysqli_query($db,$sql3) or die("Problemas en el select 3".mysqli_error($db));
        $nRegistros3 = mysqli_num_rows($result3);
        while($registro3 = mysqli_fetch_array($result3)){
            echo "<option value='".$registro3['Usuario_id']."' >".$registro3['Usuario_apellido1']." ".$registro3['Usuario_apellido2'].", ".$registro3['Usuario_nombre']."</option>";
        }
        echo "</select></td><td><input type='text' value='".$registro['Obra_latitud']."' id='latitud' name='latitud'></td><td><input type='text' value='".$registro['Obra_longitud']."' id='longitud' name='longitud'></td>
        <td><select name='cliente' id='cliente' class='form-control' style='width: 250px;'>";
        
        $sql2 = "select * from usuarios where Usuario_id = ".$registro['Obra_cliente'];
        //password_hash($password, PASSWORD_DEFAULT);
        $result2 = mysqli_query($db,$sql2) or die("Problemas en el select 2".mysqli_error($db));
        $nRegistros2 = mysqli_num_rows($result2);
        while($registro2 = mysqli_fetch_array($result2)){
            echo "<option value='".$registro2['Usuario_id']."' selected>".$registro2['Usuario_apellido1']." ".$registro2['Usuario_apellido2'].", ".$registro2['Usuario_nombre']."</option>";
        }
        $sql3 = "select * from usuarios where Usuario_perfil = 'cliente'";
        //password_hash($password, PASSWORD_DEFAULT);
        $result3 = mysqli_query($db,$sql3) or die("Problemas en el select 3".mysqli_error($db));
        $nRegistros3 = mysqli_num_rows($result3);
        while($registro3 = mysqli_fetch_array($result3)){
            echo "<option value='".$registro3['Usuario_id']."' selected>".$registro3['Usuario_apellido1']." ".$registro3['Usuario_apellido2'].", ".$registro3['Usuario_nombre']."</option>";
        }
        echo "</select></td><td>";
        $sql4 = "select * from fotos where obra_id = ".$id;
        
        $result4 = mysqli_query($db,$sql4) or die("Problemas en el select 0".mysqli_error($db));
        
        while($registro4 = mysqli_fetch_array($result4)){
          $fotoActual = $registro4['foto'];
          $idObra = $registro4['obra_id']; 
        }
        echo "<div><img src='".$fotoActual."' width='40%' height='40%'></div><input type='file' name='foto'  style='color:white;'><input type='text' size='5' value='".$registro['Obra_id']."' id='id2' name='id2' hidden></td></form></tr></tbody>";

    }
    echo "</table></div><br><br> ";
?>
</body>
</html>