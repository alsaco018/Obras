<html>
	<head>
		<title>Elements - Landed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<?php 
	include('dbConfig.php');
	session_start();
	$db or
    die("Connection failed: ");

    //print_r ($_SESSION);
    ?>
		<div id="page-wrapper">
            
							
							<?php
									$sql = "select * from fotos";
									$foto = []; $idsObra = [];$nObras = 0;
									$result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
									
									while($registro = mysqli_fetch_array($result)){
										$foto[] = $registro['foto'];
										$idsObra[] = $registro['obra_id']; 
										$nObras++;
										
										
									}

									for($i = 0; $i < $nObras; ++$i){
										echo "<section class='col-4 col-6-medium col-12-xsmall'><div><img src='".$fotos[$i]."' width='70%' height='70%'></div>";
										$sql2 = "select Obra_nombre, Obra_direccion from obras where Obra_id = ".$idsObra[$i];
										$result2 = mysqli_query($db,$sql2) or die("Problemas en el select 1".mysqli_error($db));
										while($registro2 = mysqli_fetch_array($result2)){
											echo "<h2>".$registro2['Obra_nombre']."</h2><br>
											<h4>".$registro2['Obra_direccion']."</h4></section>";
										}
									}
									?>


            </section>
        </div>
    </body>
</html>