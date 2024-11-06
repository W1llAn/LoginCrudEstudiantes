<?php
    include_once 'models/conexion.php';
    $con = new conexion();
    $con->conectar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <style>
        .admin-message {
            text-align: center;
            font-size: 3em;
            font-weight: bold;
            color: #ff0000;
            animation: blink 1s infinite;
            margin-top: 50px;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="admin-message">
        ERES ADMINISTRADOR
    </div>
</body>
</html>
