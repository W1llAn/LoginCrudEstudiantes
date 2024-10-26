<?php
session_start(); // Iniciar la sesión para almacenar datos de autenticación

class AuthU {
    public static function inicioSesion() {
        include 'conexion.php'; 
        $conn = new conexion();
        $con = $conn->conectar();

        if ($con === false) {
            echo json_encode(["error" => "Error al conectar con la base de datos"]);
            return;
        }

        $usuario = trim($_POST['usuario']);
        $password = trim($_POST['password']);

        $sqlIngresar = "SELECT * FROM usuarios WHERE usuario = ?";
        $stmt = $con->prepare($sqlIngresar);

        if ($stmt) {
            $stmt->bind_param('s', $usuario);
            $stmt->execute();
            $respuesta = $stmt->get_result();

            if ($respuesta->num_rows > 0) {
                $row = $respuesta->fetch_assoc();

                if ($password == $row['password']) {
                    $id_rol = $row['id_rol'];

                    if ($id_rol == 1) {
                        $_SESSION['rol'] = "admin";

                    } elseif ($id_rol == 2) {
                        $_SESSION['rol'] = "cliente";
                    } else {
                        echo json_encode(["error" => "Rol no válido"]);
                        return;
                    }
                    $_SESSION['usuario'] = $usuario;

                    echo json_encode(["message" => "Login exitoso", "rol" => $_SESSION['rol']]);
                } else {
                    echo json_encode(["error" => "Contraseña incorrecta"]);
                }
            } else {
                echo json_encode(["error" => "Usuario no encontrado"]);
            }
        } else {
            echo json_encode(["error" => "Error en la consulta"]);
        }

        $stmt->close();
        $con->close();
    }
}
?>
