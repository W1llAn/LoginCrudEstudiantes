<?php
class CrudS{
    public static function seleccionarEstudiantes(){
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $sqlSelect = "SELECT estudiantes.estCedula, estudiantes.estNombre, estudiantes.estApellido, estudiantes.estTelefono, estudiantes.estDireccion,cursos.nombre FROM estudiantes,cursos where estudiantes.curId = cursos.curId;";
        $respuesta = $con->query($sqlSelect);
        $resultado=array();
        if ($respuesta->num_rows>0) {
            while($fila = $respuesta->fetch_array()){
                array_push($resultado,$fila);
            }
        }else {
            $resultado = 'No hay estudinates';
        }
        echo json_encode($resultado);
    }
}

?>