<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Fixed Width 1 Red</title>
		<link href="css/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<h1><a href="#">LP<span>Delicuencia</span></a></h1>
					</div>
					
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
				<h1>Delicuencia Ecuador</h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">

					<nav id="sidebar">
						<div class="widget">
							<h3>Tags</h3>
							<form name="form1" method="post" action="opcionE.php">
								<select name="tag">
									<option value="1">Robo</option>
									<option value="2">Asalto</option>
									<option value="3">Delito</option>
								</select>
							</form>
							<button onclick="mostrarGrafo1()">Grafo</button>
							<input type="submit" name="Submit" value="Submit">
							<?php
								if($_POST["tag"]==1){
		
								echo "El universo" ;
								}else{
									echo "El super" ;

								}
							?>

						</div>
					</nav>
				
					<main id="contentbar">
						<div class="article">
							<button onclick="mostrarGrafo1()">Grafo</button>
							
							
						</div>
					</main>
					
					
					
					<div class="clr"></div>
				</div>
			</div>

			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">Steven Andrade</a> &#124; <a href="#">Edward Cruz</a> &#124; <a href="#">Adan Navarrete</a></p>
				</div>
			</footer>
		</div>


	<script>
		function mostrarGrafo1() {
			include 'grafo.php';

   		 };

	</script>

	</body>
</html>