<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Panel de configuración de usario</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'><link rel="stylesheet" href="assets/css/perfilObra.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="contact" id="contact">
  <div class="container">
    <div id="page-wrapper">
    <header id="header" class="alt" style="margin-top:25%;">
						<nav id="nav">
            <div align="center">
            
              <a href="index.php" style="text-decoration: none; color:white;"><i class="fa fa-home" style="transform:scale(4,4);"></i></a>
            </div>
						</nav>
          </header>
    
    <div class="col-md-offset-1 col-md-10">
      <h2>Creación de obras<i class="fa fa-user"></i></h2>
      
    </div>
    <form method="post" action="creaObra.php" name="contactform" id="contactform" enctype="multipart/form-data">
      <div class="col-md-offset-1 col-md-7">
        <fieldset>
        <input name="latitud" type="text" id="latitud" size="30" placeholder="Latitud" >
          <br>
          <input name="longitud" type="text" id="longitud" size="30" placeholder="Longitud">
          <br>
          <input name="direccion" type="text" id="direccion" size="30" placeholder="Dirección" >
          <br>
          
                    <div class="pac-card" id="pac-card">
            <div>
              
              <div id="type-selector" class="pac-controls">
                <input type="radio" name="type" id="changetype-all" checked="checked" hidden>
                
              </div>
              
            </div>
            <div id="pac-container">
              <input id="pac-input" type="text"
                  placeholder="Enter a location">
            </div>
          </div>
          <div id="map-canvas"></div>
          <div id="infowindow-content">
            <img src="" width="12" height="12" id="place-icon">
            <span id="place-name"  class="title"></span><br>
            <span id="place-address"></span>
          </div>

          
        </fieldset>
      </div>
      <div class="col-md-3">
        <fieldset>
        
        <input name="nombre" type="text" id="nombre" size="30" placeholder="Nombre" >
          <br>
          <select name="jefe" id="jefe" placeholder="Jefe de la obra" class='form-control'>
          <?php
          include('dbConfig.php');
          session_start();
            $db or
            die("Connection failed: ");
            $sql = "select * from usuarios where Usuario_perfil = 'jefe'";
            //password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
            $nRegistros = mysqli_num_rows($result);
            while($registro = mysqli_fetch_array($result)){
                echo "<option value='".$registro['Usuario_id']."'>".$registro['Usuario_apellido1'].", ".$registro['Usuario_nombre']."</option>";
            }
            echo "</select><br>";
          ?>
          <br>
         <select name="cliente" id="cliente" placeholder="Cliente de la obra" class='form-control'>
          <?php
            $db or
            die("Connection failed: ");
            $sql = "select * from usuarios where Usuario_perfil = 'cliente'";
            //password_hash($password, PASSWORD_DEFAULT);
            $result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
            $nRegistros = mysqli_num_rows($result);
            while($registro = mysqli_fetch_array($result)){
                echo "<option value='".$registro['Usuario_id']."'>".$registro['Usuario_apellido1'].", ".$registro['Usuario_nombre']."</option>";
            }
            echo "</select><br>";
          ?>
          <br>
         
          <br>
          <label for="foto" style="color:white;">Foto de la obra: </label><br />
          
          <input type="file" name="foto" id="foto" style="color:white;"><br />
        </fieldset>
      </div>
      <div class="col-md-offset-1 col-md-10">
        <fieldset>
          <input type="submit" class="btn btn-lg" id="submit" value="Guardar">
        </fieldset>
      </div>
    </form>
    
    </div>
  </div>
</div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAsbZh-OJcjNt9NIcfeXFUImyjBYovmdE&libraries=places"
        async defer></script>

<!-- partial -->
  <script  src="assets/js/perfilObra.js"></script>

</body>
</html>