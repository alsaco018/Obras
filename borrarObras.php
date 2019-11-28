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
  Se ha borrado la obra
  <span>
    Satisfactoriamente
  </span>
 
</p>
<p style="margin-top: 35%">

  
  <a style="text-decoration:none;color:white;" href="http://albertosaldanacontreras.phpzilla.net/Examen/administracionObras.php" data-toggle="tooltip" data-placement="bottom" title="Volver a la página de administración de usuarios">&mdash; Volver a la página de administración de obras &mdash;</a>

</p>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php
  
    include('dbConfig.php');

          
            //$idObra = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $jefe = $_REQUEST['jefe'];
            $cliente = $_REQUEST['cliente'];
            $latitud = $_REQUEST['latitud'];
            $longitud = $_REQUEST['longitud'];
            $direccion = $_REQUEST['direccion'];
          
              //establecemos la conexion con la BD
            $db or
                die("Connection failed: ");

                $sql = "select Obra_id from obras where Obra_nombre = '".$nombre."' ";
          //password_hash($password, PASSWORD_DEFAULT);
          $result = mysqli_query($db,$sql) or die("Problemas en el select 2".mysqli_error($db));
          $result = $result->fetch_array();
          $idObra = $result[0];

          $latitud = floatval($latitud);
          $longitud = floatval($longitud);

          $sql = "INSERT INTO `obras_historico`(`Obra_id`, `Obra_nombre`, `Obra_direccion`, `Obra_jefe`, `Obra_latitud`, `Obra_longitud`, `Obra_cliente`) VALUES (".$idObra.",'".$nombre."','".$direccion."',".$jefe.",".$latitud.",".$longitud.",".$cliente.")";
            //echo $sql;
            //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
            mysqli_query($db,$sql)
            or die("Problemas en el update".mysqli_error($db));
            
            $sql = "DELETE from obras WHERE Obra_nombre = '".$nombre."'";
            //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
          
          
          mysqli_query($db,$sql)
          or die("Problemas en el update 1".mysqli_error($db));


/*
          $sql = "DELETE from trabajadores_obra where obra_id = ".$idObra."";
          mysqli_query($db,$sql)
          or die("Problemas en el update 2".mysqli_error($db));*/
          mysqli_close($db);
        
         
        
         
    ?>



</body>
</html>