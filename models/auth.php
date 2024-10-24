<?php
class AuthU{
    public static function inicioSesion(){
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $usuario = $_POST['nombreUsuario'];
        $password = $_POST['password'];
        $sqlIngresar = "SELECT * FROM usuarios WHERE nombreUsuario = '$usuario'";
        $respuesta = $con -> query($sqlIngresar);
        
        if($respuesta -> num_rows > 0){
            $row = $respuesta->fetch_assoc();
            if ($password == $row['password']){
                echo json_encode(["message" => "Login exitoso"]);
            }else{
                echo json_encode(["error" => "Contraseña incorrecta"]);
            }
        }else {
            echo json_encode(["error" => "Usuario no encontrado"]);
        }
    }
}



?>