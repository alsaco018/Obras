<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Administración de usuarios</title>
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
    $sql = "select * from usuarios where Usuario_perfil = 'trabajador' order by Usuario_apellido1, Usuario_nombre desc";
    //password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
    $nRegistros = mysqli_num_rows($result);
    echo "<div class=' table-responsive'><table class='table table-dark table-hover'><thead><tr><td>Editar</td><td>Eliminar</td><td>Id</td><td>     Nombre    </td><td>     Primer apellido     </td><td>     Segundo apellido     </td><td>     Nick </td><td>Clave</td><td>Fecha de alta en el sistema</td><td>Email</td><td>Bloqueado</td><td>Fecha de bloqueo</td><td>Número de intentos</td><td>Fecha de última conexión</td><td>Token</td><td>Domicilio</td><td>Población</td><td>Provincia</td><td>Tipo de usuario</td><td>NIF</td><td>Teléfono</td><td>Fotografía</td><td>Fecha de contratación</td></tr></thead>";
    while($registro = mysqli_fetch_array($result)){
        echo "<form action='' method='POST'><tbody><tr><td><input type='submit' class='btn btn-danger' formaction='editarUsuarios.php' value='Editar'></td><td><input type='submit' class='btn btn-danger' formaction='borrarUsuarios.php' value='Borrar'></td><td><input type='text' value='".$registro['Usuario_id']."' id='id' name='id' disabled></td><td><input type='text' value='".$registro['Usuario_nombre']."' id='nombre' name='nombre'></td><td><input type='text' value='".$registro['Usuario_apellido1']."' id='apellido1' name='apellido1'></td><td><input type='text' value='".$registro['Usuario_apellido2']."' id='apellido2' name='apellido2'></td><td><input type='text' value='".$registro['Usuario_nick']."' id='nick' name='nick'></td> <td><input type='text' placeholder='".$registro['Usuario_clave']."' id='pass' name='pass'></td><td><input type='date' value='".$registro['Usuario_fecha_alta']."' id='fechaAlta' name='fechaAlta'></td><td><input type='text' value='".$registro['Usuario_email']."' id='email' name='email'></td><td><input type='text' value='".$registro['Usuario_bloqueado']."' id='bloqueado' name='bloqueado'></td><td><input type='date' value='".$registro['Usuario_fecha_bloqueo']."' id='fechaBloqueo' name='fechaBloqueo'></td><td><input type='text' value='".$registro['Usuario_numero_intentos']."' id='intentos' name='intentos'></td><td><input type='date' value='".$registro['Usuario_fecha_ultima_conexion']."' id='fechaUltConexion' name='fechaUltConexion'></td> <td><input type='text' value='".$registro['Usuario_token_aleatorio']."' id='token' name='token' disabled></td><td><input type='text' value='".$registro['Usuario_domicilio']."' id='direccion' name='direccion'></td><td><input type='text' value='".$registro['Usuario_poblacion']."' id='poblacion' name='poblacion'></td><td><input type='text' value='".$registro['Usuario_provincia']."' id='provincia' name='provincia'></td><td><input type='text' value='".$registro['Usuario_perfil']."' id='perfil' name='perfil'></td><td><input type='text' value='".$registro['Usuario_nif']."' id='nif' name='nif'></td><td><input type='text' value='".$registro['Usuario_numero_telefono']."' id='telefono' name='telefono'></td> <td><input type='text' value='".$registro['Usuario_fotografia']."' name='foto' id='foto'></td><td><input type='date' value='".$registro['Usuario_fecha_contratacion']."' name='fechaContratacion' id='fechaContratacion'></td></tr></tbody></form>";

    }
    echo "</table></div><br><br> <div align='center'>
    <form>
    <input type='submit' class='btn btn-danger' formaction='crearTrabajador.php' value='Crear Trabajador'>
    
    
    </form>
  </div> ";
?>
</body>
</html>