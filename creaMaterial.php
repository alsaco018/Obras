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
          $prec = $_REQUEST['precio'];
          $peso1 = $_REQUEST['peso'];
          $anch = $_REQUEST['anchura'];
          $alt = $_REQUEST['altura'];
          $prof = $_REQUEST['profundidad'];
          $descripcion = $_REQUEST['descripcion'];
          $proveedor = $_REQUEST['proveedor'];

          
            //establecemos la conexion con la BD
          $db or
              die("Connection failed: ");
    
          $precio = floatval($prec);
          $anchura = floatval($anch);
          $altura = floatval($alt);
          $profundidad = floatval($prof);
          $peso = floatval($peso1);
          if($_FILES['foto']['tmp_name'] != null){
            copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
            //$_FILES['foto']['name'] = "images/".$_FILES['foto']['name'];
  
            $nom = $_FILES['foto']['name'];
            $target_dir= "images/";//la foto que vayas subiendo ira guardandose en la carpeta images, sino tienes esta carpeta no subira el archivo.
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
          }
          
         
          $sql = "INSERT INTO `materiales`(`Material_ID`, `Material_Nombre`, `Material_Precio`, `Material_Peso`, `Material_Dimensiones_alto`, `Material_Dimensiones_ancho`, `Material_Dimensiones_profundo`, `Material_Proveedor_ID`, `Material_Foto`, `Material_Descripcion`) VALUES  (0,'".$nombre."',".$precio.",".$peso.",".$altura.",".$anchura.",".$profundidad.",".$proveedor.", '".$nom."', '".$descripcion."')";
        
          mysqli_query($db,$sql)
          or die("Problemas en el update".mysqli_error($db));
          mysqli_close($db);
        
          move_uploaded_file($_FILES["foto"]["tmp_name"],$target_file);
         
    ?>



</body>
</html>