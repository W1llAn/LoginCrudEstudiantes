<?php
class crudG{
    public static function crearEstudiante(){
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $cedula = $_POST['estCedula'];
        $nombre = $_POST['estNombre'];
        $apellido = $_POST['estApellido'];
        $telefono = $_POST['estTelefono'];
        $direccion = $_POST['estDireccion'];
        $curId = $_POST['curId'];
        
        $sqlInsert = "INSERT INTO estudiantes VALUES('$cedula','$nombre','$apellido','$telefono','$direccion',$curId)";

        if ($con->query($sqlInsert)==TRUE) {
            echo json_encode("se guardo");
        }else {
            echo json_encode("No se guardo".$sqlInsert.$mysqli->error);
        }

    }
}


?>