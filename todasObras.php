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
										
									}
									?>


            </section>
        </div>
    </body>
</html>