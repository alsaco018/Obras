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
  Se ha creado el proveedor
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

        
          
          $nombre = $_REQUEST['nombre'];
          $direccion = $_REQUEST['direccion'];
          $cif = $_REQUEST['cif'];
          $contacto = $_REQUEST['contacto'];
          $telefono = $_REQUEST['telefono'];
          $email = $_REQUEST['email'];
          $url = $_REQUEST['url'];
          
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
          $tel = intval($telefono);
          
          
         
          $sql = "INSERT INTO `proveedores`(`Proveedor_ID`, `Proveedor_Nombre`, `Proveedor_Direccion`, `Proveedor_CIF`, `Proveedor_Persona_Contacto`, `Proveedor_Telefono`, `Proveedor_URL`, `Proveedor_Email`) VALUES (0,'".$nombre."','".$direccion."','".$cif."','".$contacto."',".$telefono.",'".$url."','".$email."')";
        
          mysqli_query($db,$sql)
          or die("Problemas en el update".mysqli_error($db));
          mysqli_close($db);
        
        
         
    ?>



</body>
</html>