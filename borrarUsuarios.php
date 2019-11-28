<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Neuton|Oswald'>
<link rel="stylesheet" href="assets/css/signUp.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


</head>
<body>
<!-- partial:index.partial.html -->
<p>
  Se ha borrado el usuario
  <span>
    Satisfactoriamente
  </span>
 
</p>
<p style="margin-top: 35%">

  
  <a style="text-decoration:none;color:white;" href="http://albertosaldanacontreras.phpzilla.net/Examen/administracionUsuarios.php" data-toggle="tooltip" data-placement="bottom" title="Volver a la página de administración de usuarios">&mdash; Volver a la página de administración de usuarios &mdash;</a>

</p>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php
  
    include('dbConfig.php');


    
          
        //$idUsuario = $_REQUEST['id'];
        $nick = $_REQUEST['nick'];
          
          $nombre = $_REQUEST['nombre'];
          $apellido1 = $_REQUEST['apellido1'];
          $apellido2 = $_REQUEST['apellido2'];
          $nif = $_REQUEST['nif'];
          $telefono = $_REQUEST['telefono'];
          $provincia = $_REQUEST['provincia'];
          $poblacion = $_REQUEST['poblacion'];
          $direccion = $_REQUEST['direccion'];
          $perfil = $_REQUEST['perfil'];
          $bloqueado = $_REQUEST['bloqueado'];
          $fechaContratacion = $_REQUEST['fechaContratacion'];
          $fechaAlta = $_REQUEST['fechaAlta'];
          $email = $_REQUEST['email'];
          $fechaBloqueo = $_REQUEST['fechaBloqueo'];
          $intentos = $_REQUEST['intentos'];
          $fechaUltConexion = $_REQUEST['fechaUltConexion'];
          $token = $_REQUEST['token'];
          $tel = intval($telefono);
          $foto = $_REQUEST['foto'];

          //establecemos la conexion con la BD
        $db or
        die("Connection failed: ");

          $sql = "select Usuario_clave from usuarios where Usuario_email = '".$email."' ";
          //password_hash($password, PASSWORD_DEFAULT);
          $result = mysqli_query($db,$sql) or die("Problemas en el select 1".mysqli_error($db));
          $result = $result->fetch_array();
          $pass = $result[0];

          $sql = "select Usuario_id from usuarios where Usuario_email = '".$email."' ";
          //password_hash($password, PASSWORD_DEFAULT);
          $result = mysqli_query($db,$sql) or die("Problemas en el select 2".mysqli_error($db));
          $result = $result->fetch_array();
          $idUsuario = $result[0];
          

            $sql = "INSERT INTO `usuarios_historico`(`Usuario_id`, `Usuario_nombre`, `Usuario_apellido1`, `Usuario_apellido2`, `Usuario_nick`, `Usuario_clave`, `Usuario_fecha_alta`, `Usuario_email`, `Usuario_bloqueado`, `Usuario_fecha_bloqueo`, `Usuario_numero_intentos`, `Usuario_fecha_ultima_conexion`, `Usuario_token_aleatorio`, `Usuario_domicilio`, `Usuario_poblacion`, `Usuario_provincia`, `Usuario_perfil`, `Usuario_nif`, `Usuario_numero_telefono`, `Usuario_fotografia`, `Usuario_fecha_contratacion`) VALUES (".$idUsuario.",'".$nombre."','".$apellido1."','".$apellido2."','".$nick."','".$pass."','".$fechaAlta."','".$email."',".$bloqueado.",'".$fechaBloqueo."', ".$intentos.", '".$fechaUltConexion."', '".$token."','".$direccion."','".$poblacion."','".$provincia."','".$perfil."','".$nif."',".$tel.",'".$foto."','".$fechaContratacion."')";
            //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
            //echo $sql;
            mysqli_query($db,$sql)
            or die("Problemas en el update".mysqli_error($db));
          
            $sql = "DELETE from usuarios WHERE Usuario_email = '".$email."'";
            //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
          
          
          mysqli_query($db,$sql)
          or die("Problemas en el update 1".mysqli_error($db));

          $sql2 = "DELETE from trabajadores_obra where usuario_id = ".$idUsuario."";
          mysqli_query($db,$sql2)
          or die("Problemas en el update 2".mysqli_error($db));

          mysqli_close($db);
        
        
         
    ?>



</body>
</html>