<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Log in / Registro</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
<link rel="stylesheet" href="assets/css/logIn.css">
<style>
  #error{
    color:red;
  }
  </style>

<script type="text/javascript">

  function compruebaContrasenna(){
      if(document.getElementById('pass').value != document.getElementById('pass2').value){
        alert("Las contraseñas no coinciden");
        event.preventDefault();
        document.getElementById('pass').value = "";
        document.getElementById('pass2').value = "";
      }else{
        document.getElementById('formularioRegistro').action = "registro.php";
      }
  }
  
</script>
</head>
<body>
    <?php $error = ($_GET['error']);
          
          //borramos <?php echo ';?' de las variables
        $error = str_replace("<?php echo ","",$error);
        $error = str_replace(";?>","",$error); ?>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Log in</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
		<div class="login-form">
			<div class="sign-in-htm">
          <form action="logIn.php" method="post" name="form">
            <div class="group">
            <label for="email" class="label">Email</label>
              <input name="email" id="email" type="email" class="input">
            </div>
            <div class="group">
              <label for="pass0" class="label">Contraseña</label>
              <input name="pass0" id="pass0" type="password" class="input" data-type="password">
            </div>
            <!--<div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span>Mantenerme conectado</label>
            </div>-->
            <div class="group">
              <input type="submit" class="button" value="Log in">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">¿Has olvidado la contraseña?</a>
            </div>
            </form>
      </div>
			<div class="sign-up-htm">
          <form action="" method="post" id="formularioRegistro" enctype="multipart/form-data">
            <div class="group">
              <label for="user" class="label">Nick</label>
              <input name="user" id="user" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Contraseña</label>
              <input name="pass" id="pass" type="password" class="input" data-type="password">
            </div>

            <div class="group">
              <label for="pass2" class="label">Vuelve a escribir la contraseña</label>
              <input id="pass2" type="password" class="input" data-type="password">
              
            </div>
            
            <div class="group">
              <label for="email" class="label">Email</label>
              <input name="email" id="email" type="email" class="input">
            </div>
            <div class="group">
              <button type="submit" class="button" value="registrarse" onclick="compruebaContrasenna()">Registrarse</button>
            </div>
            
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">¿Ya perteneces a la web?</a>
            </div>
            </form>
            </div>
            
		</div>
	</div>
</div>
<div class="group" align="center">
                <h2 id="error"><?php echo $error; ?></h2>
            </div>
</body>
</html>