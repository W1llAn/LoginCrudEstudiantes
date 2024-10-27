<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/btn.css">
    <script src="javaScripts/prueba.js"></script>
    <title>Mi pagina</title>
</head>
<body>
    <header>
        <img src="images/banner uta 2.png" width="100%" height="auto">
    </header>
    <nav>
        <ul>
            <li><a href="index.php?action=inicio">Inicio</a></li>
            <?php
            if (isset($_SESSION['rol'])) {
                if ($_SESSION['rol'] === 'admin') {
                    echo '<li><a href="index.php?action=nosotros">Nosotros</a></li>';
                    echo '<li><a href="index.php?action=servicios">Servicios</a></li>';
                } elseif ($_SESSION['rol'] === 'cliente') {
                    echo '<li><a href="index.php?action=nosotros_cliente">Nosotros</a></li>';
                    echo '<li><a href="index.php?action=servicios_cliente">Servicios</a></li>';
                }
                echo '<li><a href="index.php?action=contactanos">Contactanos</a></li>';
                echo '<li><a href="logout.php">Cerrar Sesión</a></li>';
            } else {
                echo '<li><a href="index.php?action=iniciarSesion">Iniciar Sesión</a></li>';
            }
            ?>
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
    <footer>Derechos Reservados @Cuarto Software</footer>
</body>
</html>
