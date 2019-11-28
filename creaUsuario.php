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
  Se ha creado el usuario
  <span>
    Satisfactoriamente
  </span>
 
</p>
<p style="margin-top: 35%">

  
  <a style="text-decoration:none;color:white;" href="http://albertosaldanacontreras.phpzilla.net/Examen" data-toggle="tooltip" data-placement="bottom" title="Volver a la página principal">&mdash; Volver a la página principal &mdash;</a>

</p>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php
    session_start();
    include('dbConfig.php');

        
          $nick = $_REQUEST['nick'];
          $pass = $_REQUEST['pass'];
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
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
          $token = Time();
          $tel = intval($telefono);
          //hasheo de la clave
          $passHash = hash('md5', $pass);
          //echo $passHash;
          if($_FILES['foto']['tmp_name'] != null){
            copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
            //$_FILES['foto']['name'] = "images/".$_FILES['foto']['name'];
  
            $nom = $_FILES['foto']['name'];
            $target_dir= "images/";//la foto que vayas subiendo ira guardandose en la carpeta images, sino tienes esta carpeta no subira el archivo.
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
          }
         
          $sql = "INSERT INTO `usuarios`(`Usuario_id`, `Usuario_nombre`, `Usuario_apellido1`, `Usuario_apellido2`, `Usuario_nick`, `Usuario_clave`, `Usuario_fecha_alta`, `Usuario_email`, `Usuario_bloqueado`, `Usuario_token_aleatorio`, `Usuario_domicilio`, `Usuario_poblacion`, `Usuario_provincia`, `Usuario_perfil`, `Usuario_nif`, `Usuario_numero_telefono`, `Usuario_fotografia`, `Usuario_fecha_contratacion`) VALUES (0,'".$nombre."','".$apellido1."','".$apellido2."','".$nick."','".$passHash."','".$fechaAlta."','".$email."',".$bloqueado.",'".$token."','".$direccion."','".$poblacion."','".$provincia."','".$perfil."','".$nif."',".$tel.",'".$nom."','".$fechaContratacion."')";
          //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
          mysqli_query($db,$sql)
          or die("Problemas en el update".mysqli_error($db));
          mysqli_close($db);
        
          move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file);
        
         
    ?>



</body>
</html>