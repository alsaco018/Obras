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
  Se ha agregado el material
  <span>
    a la obra.
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

        
          $obra = $_REQUEST['obra'];
          $material = $_REQUEST['material'];
          $cantidad = $_REQUEST['cantidad'];
          $fecha = $_REQUEST['fecha'];
          
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
          
          $material = intval($material);
          $obra = intval($obra);
         
          $sql = "INSERT INTO `materiales_obra`(`materiales_id`, `obras_id`, `usuario_id`, `cantidad`, `fecha`) VALUES (".$material.",".$obra.",19,".$cantidad.",'".$fecha."')";
          
          mysqli_query($db,$sql)
          or die("Problemas en el update".mysqli_error($db));
          mysqli_close($db);
        
        
         
    ?>



</body>
</html>