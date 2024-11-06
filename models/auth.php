<?php
session_start(); // Iniciar la sesión para almacenar datos de autenticación

class AuthU {
    public static function inicioSesion() {
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $usuario = $_POST ['usuario'];
        $password = $_POST['password'];
        $sqlIngresar = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $respuesta = $con->query($sqlIngresar);
        if ($respuesta->num_rows>0){
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
        }else {
        echo json_encode(["error" => "Usuario no encontrado" ]);
        }
    }
}
?>
