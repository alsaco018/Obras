<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Panel de configuración de usario</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css'><link rel="stylesheet" href="assets/css/perfilUsuario.css">

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
      <h2>Creación de trabajador<i class="fa fa-user"></i></h2>
      
    </div>
    <form method="post" action="creaUsuario.php" name="contactform" id="contactform" enctype="multipart/form-data">
      <div class="col-md-offset-1 col-md-3">
        <fieldset>
          <input name="nombre" type="text" id="nombre" size="30" placeholder="Nombre" >
          <br>
          <input name="apellido1" type="text" id="apellido1" size="30" placeholder="Primer apellido">
          <br>
          <input name="apellido2" type="text" id="apellido2" size="30" placeholder="Segundo apellido">
          <br>
          <input name="nif" type="text" id="nif" size="30" placeholder="DNI (12345678A)" >
          <br>
          <input name="telefono" type="text" id="telefono" size="30" placeholder="Teléfono" >
          <br>
          <input name="email" type="email" id="email" placeholder="Email"size="30" >
          <br>
          <input name="nick" type="text" id="nick" size="30" placeholder="Nick">
          <br>
          <input name="pass" type="text" id="pass" size="30" placeholder="Clave">
          <br>
          <label for="foto" style="color:white;">Foto de usuario: </label><br />
          
          <input type="file" name="foto" id="foto" style="color:white;"><br />
        </fieldset>
      </div>
      <div class="col-md-7">
        <fieldset>
        <input name="provincia" type="text" id="provincia" size="30" placeholder="Provincia" >
          <br>
          <input name="poblacion" type="text" id="poblacion" size="30" placeholder="Población">
          <br>
          <input name="direccion" type="text" id="direccion" size="30" placeholder="Dirección" >
          <br>
          <input name="perfil" type="text" id="perfil" size="30" value="trabajador" hidden>
          <br>
          
          <input name="bloqueado" type="number" id="bloqueado" size="30" min="0" max="1" value="0" hidden>
          <br>
          <label for="fechaContratacion" style="color:white;">Fecha de contratación:</label>
          <input name="fechaContratacion" type="date" id="fechaContratacion" size="30" placeholder="Fecha de contrataación">
          <br>
          <label for="fechaAlta" style="color:white;">Fecha de alta en el sistema:</label>
          <input name="fechaAlta" type="date" id="fechaAlta" size="30" placeholder="Fecha de alta en el sistema">
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
  <script  src="assets/js/perfilUsuario.js"></script>

</body>
</html>