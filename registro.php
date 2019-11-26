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

<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php 
            
            include('dbConfig.php');
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
        
        /* Exception class. */
        require 'PHPMailer/src/Exception.php';
        
        /* The main PHPMailer class. */
        require 'PHPMailer/src/PHPMailer.php';
        
        /* SMTP class, needed if you want to use SMTP. */
        require 'PHPMailer/src/SMTP.php';
        
          $nick = $_REQUEST['user'];
          $email = $_REQUEST['email'];
          $pass = $_REQUEST['pass'];
          


          
            $db or
            die("Connection failed: ");
            
            $sql = "select Usuario_nick from usuarios where Usuario_email = '".$email."'";//SELECT * FROM `usuarios` WHERE `Usuario_email`
                  //password_hash($password, PASSWORD_DEFAULT);
                  $result = mysqli_query($db,$sql);
                  if(mysql_num_rows($sql)==0){ // no esta disponible
                    ?>
                    <!-- partial:index.partial.html -->
                    <p>
                      Has sido dado de alta
                      <span>
                        Revisa tu correo
                      </span>
                      &mdash; y confirma tu cuenta de usuario &mdash;
                    </p>
                    <?php
                    $mailer = new PHPMailer(TRUE);
                    
                    
                    try {
                      /* Set the mail sender. */
                      $mailer->setFrom('albertosaldanadiw@gmail.com', 'Alberto');
                  
                      /* Add a recipient. */
                      $mailer->addAddress($email, 'Usuario');
                  
                      /* Set the subject. */
                      $mailer->Subject = 'Registro en Landed Constructions';
                  
                      /* Set the mail message body. */
                      $mailer->Body .= "<meta charset='UTF-8'><h1>Registro en Landed Constructions</h1><br><br>";
                      $mailer->Body .= "<h3>Estos son tus datos de registro:</h3><br>";
                      $mailer->Body .= "<p>Usuario: ".$nick."<br>Contraseña: ".$pass."</p><br><br>";
                      $mailer->Body .= "<p>Debes activar tu cuenta pulsando este enlace: <a href='http://www.albertosaldanacontreras.phpzilla.net/Examen/registroConfirmado.php?nick=<?php echo $nick;?>&pass=<?php echo $pass;?>&email=<?php echo $email;?>'>Confirmar correo</a>";
                      $mailer->IsHTML(true);
        
                      $mailer->isSMTP();
                      $mailer->Host = 'smtp.gmail.com';
                      $mailer->Port = 587;
                      $mailer->SMTPAuth = true;
                      $mailer->SMTPSecure = 'tls';
        
                      /* Username (email address). */
                      $mailer->Username = 'albertosaldanadiw@gmail.com';
        
                      /* Google account password. */
                      $mailer->Password = 'colossusmark45';
                            
                      /* Finally send the mail. */
                      $mailer->send();
                  }
                  catch (Exception $e)
                  {
                      /* PHPMailer exception. */
                    echo $e->errorMessage();
                  }
                  catch (\Exception $e)
                  {
                      /* PHP exception (note the backslash to select the global namespace Exception class). */
                      echo $e->getMessage();
                  }
                  
                  
              }else{
                $error = "El correo ya existe.";
                header("location: http://albertosaldanacontreras.phpzilla.net/Examen/signUp.php?error=<?php echo $error;?>");
               
              }
          ?>


</body>
</html>