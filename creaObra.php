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
  Se ha creado la obra
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
          $jefe = $_REQUEST['jefe'];
          $cliente = $_REQUEST['cliente'];
          $latitud = $_REQUEST['latitud'];
          $longitud = $_REQUEST['longitud'];
          $direccion = $_REQUEST['direccion'];
         
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
         $latitud = floatval($latitud);
         $longitud = floatval($longitud);

          $sql = "INSERT INTO `obras`(`Obra_id`, `Obra_nombre`, `Obra_direccion`, `Obra_jefe`, `Obra_latitud`, `Obra_longitud`, `Obra_cliente`) VALUES (0,'".$nombre."','".$direccion."',".$jefe.",".$latitud.",".$longitud.",".$cliente.")";
          //echo $sql;
          //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
          mysqli_query($db,$sql)
          or die("Problemas en el update".mysqli_error($db));
          mysqli_close($db);
        
         
        
         
    ?>



</body>
</html>