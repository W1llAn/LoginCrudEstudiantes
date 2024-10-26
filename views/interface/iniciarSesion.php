<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Iniciar Sesión</title>
</head>

<body>
    <br>
    <form class="form" onsubmit="validarUsuario(); return false;">
        <div class="input-container">
            <h5 id="mensajeError" style="color: red"></h5>
            <h3>Usuario</h3>
            <input type="text" name="usuario" placeholder="Dirección de correo institucional sin @uta.edu.ec">
            <span></span>
        </div>

        <div class="input-container">
            <h3>Contraseña</h3>
            <input type="password" name="password" placeholder="Contraseña">
        </div>
        <input type="hidden" name="action" value="login">
        <button type="submit" class="submit" style="cursor: pointer;">
            Iniciar Sesión
        </button>

        <script>
            function validarUsuario() {
                url = 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php';
                var usuario = $('input[name="usuario"]').val();
                var password = $('input[name="password"]').val();
                $('#mensajeError').text('');

                if (!usuario || !password) {
                    $('#mensajeError').text('Por favor, ingrese usuario y contraseña.');
                    return;
                }

                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'login',
                        usuario: usuario,
                        password: password,
                    },
                    success: function(jsonData) {
                        if (jsonData.message) {
                            if (jsonData.rol === 'admin') {
                                window.location.href = 'index.php?action=nosotros';
                                window.location.href = 'index.php?action=servicios';
                            } else if (jsonData.rol === 'cliente') {
                                window.location.href = 'index.php?action=nosotros_cliente';
                                window.location.href = 'index.php?action=servicios_cliente';

                            }
                        } else if (jsonData.error) {
                            $('#mensajeError').text(jsonData.error);
                        }
                    },
                    error: function(error) {
                        $('#mensajeError').text('Error al procesar la solicitud.');
                    }
                });
            }
        </script>
    </form>

</body>

</html>
