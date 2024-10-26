<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Cerrar Sesión</title>
</head>

<body>
    <br>
    <form class="form" onsubmit="cerrarSesion(); return false;">
        <div class="input-container">
            <h5 id="mensajeExito" style="color: green"></h5>
            <button type="submit" class="submit" style="cursor: pointer;">
                Cerrar Sesión
            </button>
        </div>

        <script>
            function cerrarSesion() {
                url = 'http://localhost/LoginCrudEstudiantes/controllers/APIRest.php';
                
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'logout'
                    },
                    success: function(jsonData) {
                        if (jsonData.message) {
                            $('#mensajeExito').text('Sesión cerrada correctamente.');
                            setTimeout(function() {
                                window.location.href = 'index.php?action=login';
                            }, 2000);
                        } else if (jsonData.error) {
                            $('#mensajeExito').text(jsonData.error);
                        }
                    },
                    error: function(error) {
                        $('#mensajeExito').text('Error al procesar la solicitud de cierre de sesión.');
                    }
                });
            }
        </script>
    </form>

</body>

</html>
