<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--esto es para que sea responsivo en celulares -->
	<!-- Bootstrap css-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="icon" type="text/css" href="img/cone.png">
</head>
<body>
	<!--Menú principal -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="areas.html">Áreas</a>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="areas.html">Inicio<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="areas.html#aprende" id="dropdownAprende" data-toggle="dropdown" aria-expanded="false">Aprende</a>
					<div class="dropdown-menu" aria-labelledby="dropdownAprende">
						<a class="dropdown-item" href="areas.html#rectangulo">Rectángulo</a>
						<a class="dropdown-item" href="areas.html#triangulo">Triángulo</a>
						<a class="dropdown-item" href="areas.html#circulo">Círculo</a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="areas.html#practica">Practica</a>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="portafolio.html" id="dropdownPortafolio" data-toggle="dropdown" aria-expanded="false">Portafolio</a>
					<div class="dropdown-menu" aria-labelledby="dropdownPortafolio">
						<a class="dropdown-item" href="../portafolio.html">General</a>
						<a class="dropdown-item" href="../calculadora.html">Calculadora</a>
						<a class="dropdown-item" href="../divisas.html">Divisas</a>
						<a class="dropdown-item" href="../film.html">FilmSo</a>
						<a class="dropdown-item" href="../personal2.html">Página personal</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!--Banner inicial -->
	<main role="main" class="container">
		<div class="jumbotron p-4 p-md-5 text-center rounded bg-warning">
			<div class="container">
				<br><br><br>
				<h1>Aprende a obtener el área de figuras</h1>
				<p>La página donde aprenderás a cómo obtener el área de tres figuras geométricas: rectángulo, triángulo y círculo.</p>
			</div>
		</div>
	</main>

	<div class="container" style="text-align: center; margin-left: auto; margin-right: auto;">
		<br>
		<h2>RESULTADO</h2>
		<br>
		<?php
			//aquí comprobamos qué boton accionó
			if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btn1'])) {
				rectangulo();
			}
			if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btn2'])) {
				triangulo();
			}
			if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btn3'])) {
				circulo1();
			}
			if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btn4'])) {
				circulo2();
			}
		
			//funciones para obtener el área de cada figura
			function rectangulo() {
				$rectangulo = $_POST['alturaR'] * $_POST['baseR'];
				echo "<div class='container'><h2>El área del rectángulo con altura de ".$_POST['alturaR']."  y base de ".$_POST['baseR']." es: <strong>$rectangulo</strong></h2><br></div>";
			}

			function triangulo() {
				$triangulo = ($_POST['baseT'] * $_POST['alturaT']) / 2;
				echo "<div class='container'><h2>El área del triángulo con altura de ".$_POST['alturaT']." y de base ".$_POST['baseT']." es: <strong>$triangulo</strong></h2><br></div>";
			}

			function circulo1() {
				$pi = 3.1416;
				$circulo = $pi * pow($_POST['radio'], 2);
				echo "<div class='container'><h2>El área del círculo de radio ".$_POST['radio']." es: <strong>$circulo</strong></h2><br></div>";
			}

			function circulo2() {
				$pi = 3.1416;
				$circulo2 = $pi * (pow($_POST['diametro'], 2) / 4);
				echo "<div class='container'><h2>El área del círculo de diámetro ".$_POST['diametro']." es: <strong>$circulo2</strong></h2><br></div>";
			}
		?>
	</div>
	
	<br>
	<a href="areas.html#practica">Regresar</a>
</body>
</html>