<?php
class CrudE{
    public static function editarEstudiante(){
        include 'conexion.php';
        parse_str(file_get_contents("php://input"), $_PUT);
        $conn = new conexion();
        $con = $conn -> conectar();

        $cedula = $_GET['cedula'];
        $nombre = $_PUT['estNombre'];
        $apellido = $_PUT['estApellido'];
        $direccion = $_PUT['estDireccion'];
        $telefono = $_PUT['estTelefono'];
        $curId = $_PUT['curId'];

        $sqlEditar = "UPDATE estudiantes SET estNombre = '$nombre', estApellido = '$apellido', estDireccion = '$direccion', estTelefono = '$telefono', curId = $curId WHERE estCedula = '$cedula'";

        if ($con->query($sqlEditar)==TRUE) {
            echo json_encode("se actualizo");
        }else {
            echo json_encode("No se actualizo".$sqlEditar.$mysqli->error);
        }
    }
}
?>