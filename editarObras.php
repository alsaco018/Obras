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
  Se ha modificado la obra
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
    session_start();
    include('dbConfig.php');

        
          
          $nombre = $_REQUEST['nombre'];
          $jefe = $_REQUEST['jefe'];
          $cliente = $_REQUEST['cliente'];
          $latitud = $_REQUEST['latitud'];
          $longitud = $_REQUEST['longitud'];
          $direccion = $_REQUEST['direccion'];
          $id = $_REQUEST['id2'];
          $fotito = $_REQUEST['foto'.$id];
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
         $latitud = floatval($latitud);
         $longitud = floatval($longitud);

          $sql = "UPDATE `obras` SET `Obra_nombre`='".$nombre."',`Obra_direccion`='".$direccion."',`Obra_jefe`=".$jefe.",`Obra_latitud`=".$latitud.",`Obra_longitud`=".$longitud.",`Obra_cliente`=".$cliente." WHERE `Obra_id`='".$id."'";
          //echo $sql;
          //password_hash($password, PASSWORD_DEFAULT); Usuario_fotografia`=[value-20]
          mysqli_query($db,$sql)
          or die("Problemas en el update".mysqli_error($db));
          
          if($fotito != null){
            $nom = $fotito;
            copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
            //$_FILES['foto']['name'] = "images/".$_FILES['foto']['name'];
            $target_dir= "images/";//la foto que vayas subiendo ira guardandose en la carpeta images, sino tienes esta carpeta no subira el archivo.
            $target_file = $target_dir . basename($fotito);
          }
  

          $fecha = date("y.m.d");
          $sql3 = "UPDATE fotos SET foto='".$nom."',fecha='".$fecha."' WHERE `obra_id`= ".$id;
          
          mysqli_query($db,$sql3)
          or die("Problemas en el update".mysqli_error($db));
          mysqli_close($db);
          move_uploaded_file($fotito,$target_file);
         
        
         
    ?>



</body>
</html>