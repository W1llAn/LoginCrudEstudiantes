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

        if(sqlsrv_query($sqlEditar)== TRUE){
            echo json_encode('Se edito el estudiante');
        }
        else{
            echo json_encode('Fallo al borrar el estudiante'.$sqlEditar.$mysqli->error);
        }
    }
}
?>