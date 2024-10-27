<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/btn.css">
	<script src="javaScripts/prueba.js"></script>
	<title>Mi pagina </title>
</head>

<body>
	<header>
		<img src="images/banner uta 2.png" width="100%" height="auto"><img />
	</header>
	<nav>
		<ul>
			<li><a href="index.php?action=inicio">Inicio</a></li>
			<li><a href="index.php?action=nosotros_cliente">Nosotros </a></li>
			<li><a href="index.php?action=servicios_cliente">Servicios </a></li>
			<li><a href="index.php?action=contactanos"> Contactanos </a></li>
			<li> <a href="index.php?action=iniciarSesion"> Iniciar Sesión </a></li> 
            <li><a href="#" onclick="cerrarSesion()">Cerrar Sesión</a></li>
		</ul>
		
	</nav>
	<section>
		<?php
		require_once 'controllers/controller.php';
		require_once 'models/model.php';

		$mvc = new MvcController();
		$mvc->enlacesPaginasController();

		?>

	</section>
	<footer>Derechos Reserados @Cuarto Software </footer>

    <script>
    function cerrarSesion() {
        // Eliminar el estado de sesión
        localStorage.removeItem('loggedIn');
        // Redirigir al usuario a la página de inicio de sesión
        window.location.href = 'index.php?action=iniciarSesion';
    }
</script>
</body>

</html>
