<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['username'];
if ($varsesion == null || $varsesion = '') {
	header('Location: iniciar_sesion.php');
	die();
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../info/css/bootstrap.min.css">
	<link rel="stylesheet" href="../info/css/all.min.css">
	<link rel="stylesheet" href="../info/estilos.css">
	<title>Administrador</title>
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
		<div class="container-fluid">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="logout.php" class="nav-link">
							Cerrar sesion
						</a>
					</li>
					<li class="nav-item py-2 py-sm-0 disabled">
						<a href="../app/clientes/Clientes.php" class="nav-link text-white">
							<span class="fs-4ms-3 d-none d-sm-inline">Clientes</span>
						</a>
					</li>
					<li class="nav-item py-2 py-sm-0 disabled">
						<a href="../app/proveedores/proveedores.php" class="nav-link text-white">
							<span class="fs-4ms-3 d-none d-sm-inline">Proveedores</span>
						</a>
					</li>
					<li class="nav-item py-2 py-sm-0 disabled">
						<a href="../app/productos/productos.php" class="nav-link text-white">
							<span class="fs-4ms-3 d-none d-sm-inline">Productos</span>
						</a>
					</li>
					<li class="nav-item py-2 py-sm-0 disabled">
						<a href="../app/empleado/empleado.php" class="nav-link text-white">
							<span class="fs-4ms-3 d-none d-sm-inline">Empleado</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row flex-nowrap">

			<div id="content-wrapper" class="d-flex flex-column">

				<br>
				<section class="row flex ms-5">
					<h2>Bienvenido Administrador</h2>
					<p>
						Elija una de las opciones del menú
					</p>
					<div class="col-md-4 bg-success">
						<h3>Column 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
					</div>
					<div class="col-md-4 bg-light">
						<h3>Column 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script src="../info/js/bootstrap.bundle.min.js"></script>
</body>

</html>