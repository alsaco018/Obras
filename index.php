<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Landed Constructions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
	<?php 
	include('dbConfig.php');
	session_start();
	$db or
    die("Connection failed: ");

    //print_r ($_SESSION);
    ?>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Landed</a></h1>
					<nav id="nav">
						<ul>
						<?php if(isset($_SESSION['usuario'])){?>
											<li><a href="perfilUsuario.php"><?php echo $_SESSION['usuario']; ?></a></li>
											<?php }else{ ?>
												<li><a href="index.php">Home</a></li>
										<?php }
										if($_SESSION['perfil'] == 'administrador'){
											?>
											<li><a href="administrador.php" class="button">Administrar sitio</a></li>
										<?php
										}
										
										if($_SESSION['perfil'] == 'jefe'){
											?>
											<li><a href="listadoMaterialesObrasJefe.php" class="button">Agregar materiales a una obra</a></li>
										<?php
										}
										?>
							
							<li>
								<!--<a href="#">Layouts</a>
								<ul>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li><a href="no-sidebar.html">No Sidebar</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option 1</a></li>
											<li><a href="#">Option 2</a></li>
											<li><a href="#">Option 3</a></li>
											<li><a href="#">Option 4</a></li>
										</ul>
									</li>
								</ul>-->
							</li>

							
							<?php if(isset($_SESSION['usuario'])){
                                            ?><li><a href="logOut.php" class="button primary">Cerrar sesión</a></li>
                                        <?php }else{ ?>
                                            <li><a href="SignUp.html" class="button primary">Acceder/Registrarse</a></li>
                                        <?php }?>
							
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>El futuro ha llegado</h2>
							<p>Una empresa de reparaciones y construcción que trabaja por tu bienestar.</p>
						</header>
						<span class="image"><img src="https://www.mckinsey.com/~/media/McKinsey/Industries/Capital%20Projects%20and%20Infrastructure/Our%20Insights/Imagining%20constructions%20digital%20future/Insights_CDP_The-digital-future-of-construction_1536x1536_100.ashx" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="http://primepropertiesto.com/wp-content/uploads/2018/01/skyline.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>20 años de experiencia en el sector</h2>
										<p>Somos una de las empresas líderes en el sector, con una alta fidelidad por parte de nuestros clientes.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
									Blandit orci porttitor semper. Arcu phasellus tortor enim mi
									nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
									augue varius tempus lobortis porttitor accumsan consequat
									adipiscing lorem dolor.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
									adipiscing adipiscing metus massa. Blandit orci porttitor semper.
									Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
									mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
									ipsum dolor nullam.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="http://www.aglgb.com/images/background/bg03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum amet non magna accumsan</h2>
							<p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="https://www.dentons.com/-/media/images/website/background-images/industry-sectors/construction/construction_06.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Interdum felis blandit praesent sed augue</h2>
							<p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Obras</h2>
							<p>Nuestras últimas obras.</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								
									<!--<span class="icon solid alt major fa-chart-area"></span>
									<h3>Ipsum sed commodo</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>-->
									<?php
									$sql = "select * from fotos order by fecha desc limit 3";
									$foto = []; $idsObra = [];$nObras = 0;
									$result = mysqli_query($db,$sql) or die("Problemas en el select 0".mysqli_error($db));
									
									while($registro = mysqli_fetch_array($result)){
										$fotos[] = $registro['foto'];
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
								
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="todasObras.php" class="button">Ver obras</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Magna faucibus lorem diam</h2>
							<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>