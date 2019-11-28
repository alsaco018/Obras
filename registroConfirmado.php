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
  Tu cuenta ha sido confirmada
  <span>
    GRACIAS
  </span>
  &mdash; ya puedes iniciar sesión &mdash;
</p><br>
<p style="margin-top: 35%">

  
  <a style="text-decoration:none;color:white;" href="http://albertosaldanacontreras.phpzilla.net/Examen" data-toggle="tooltip" data-placement="bottom" title="¡Gracias por registrarte!">&mdash; Volver a la página principal &mdash;</a>

</p>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php
    include('dbConfig.php');
    
          $nick = ($_GET['nick']);
          $email = ($_GET['email']);
          $pass = ($_GET['pass']);
            //borramos <?php echo ';?' de las variables
          $nick = str_replace("<?php echo ","",$nick);
          $nick = str_replace(";?>","",$nick);
          $email = str_replace("<?php echo ","",$email);
          $email = str_replace(";?>","",$email);
          $pass = str_replace("<?php echo ","",$pass);
          $pass = str_replace(";?>","",$pass);
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
          $token = Time();
          $fecha = date("y.m.d");
          //hasheo de la clave
          $passHash = hash('md5', $pass);
          //echo $passHash;
          $sql = "INSERT INTO usuarios(Usuario_nick, Usuario_clave, Usuario_email, Usuario_token_aleatorio, Usuario_fecha_alta, Usuario_perfil) VALUES ('$nick','$passHash','$email','$token','$fecha', 'usuario')";
          //password_hash($password, PASSWORD_DEFAULT);
          mysqli_query($db,$sql)
          or die("Problemas en el insert".mysqli_error($db));
          mysqli_close($db);
        
         
        
         
    ?>



</body>
</html>