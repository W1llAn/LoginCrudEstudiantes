<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>iniciarSesion</title>
</head>

<body>
    <br>
    <form class="form" onsubmit="validarUsuario(); return false;">
        <div class="input-container">
            <h5 id="mensajeError" style="color: red"></h5>
            <h3>Usuario</h3>
            <input type="text" name="usuario" placeholder="Dirección de correo institucional sin @uta.edu.ec">
            <span>
            </span>
        </div>

        <div class="input-container">
            <h3>Contraseña</h3>
            <input type="password" name="contraseña" placeholder="Contraseña">
        </div>
        <input type="hidden" name="action" value="login">
        <button type="submit" class="submit" style="cursor: pointer;">
            Iniciar Sesión
        </button>

        <script>
            function validarUsuario() {
                url = 'http://localhost:8087/TrabGrupo/LoginCrudEstudiantes/controllers/APIRest.php';
                var usuario = $('input[name="usuario"]').val();
                var contraseña = $('input[name="contraseña"]').val();
                $('#mensajeError').text('');
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'login',
                        nombreUsuario: usuario,
                        password: contraseña,
                    },
                    success: function(jsonData) {
                        if (jsonData.message) {
                            // alert(JSON.stringify(jsonData.message));
                            window.location.href = 'index.php?action=nosotros';
                        } else if (jsonData.error) {
                            // alert(JSON.stringify(jsonData.error));
                            $('#mensajeError').text(JSON.stringify(jsonData.error));
                        }
                    },
                    error: function(error) {
                        alert("No se pudo leer los datos")
                    }
                });

            }
        </script>


    </form>

</body>

</html>