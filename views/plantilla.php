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
        <ul id="menu">
            <!-- El menú se cargará dinámicamente según el estado de sesión -->
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

    <script>
        function cerrarSesion() {
            localStorage.removeItem('loggedIn');
            window.location.href = 'index.php?action=iniciarSesion';
        }

        document.addEventListener('DOMContentLoaded', function () {
            const menu = document.getElementById('menu');
            const loggedIn = localStorage.getItem('loggedIn');

            if (loggedIn) {
                menu.innerHTML = `
                    <li><a href="index.php?action=inicio">Inicio</a></li>
                    <li><a href="index.php?action=nosotros">Nosotros</a></li>
                    <li><a href="index.php?action=servicios">Servicios</a></li>
                    <li><a href="index.php?action=contactanos">Contactanos</a></li>
                    <li><a href="#" onclick="cerrarSesion()">Cerrar Sesión</a></li>
                `;
            } else {
                menu.innerHTML = `
                    <li><a href="index.php?action=ini">Inicio</a></li>
                    <li><a href="index.php?action=nosotros_cliente">Nosotros</a></li>
                    <li><a href="index.php?action=servicios_cliente">Servicios</a></li>
                    <li><a href="index.php?action=contactanos">Contactanos</a></li>
                    <li><a href="index.php?action=iniciarSesion">Iniciar Sesión</a></li>
                `;
            }
        });
    </script>
</body>
</html>
