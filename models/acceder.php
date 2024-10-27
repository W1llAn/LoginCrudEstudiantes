<?php
class CrudS{
    public static function seleccionarEstudiantes(){
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $sqlSelect = "SELECT estudiantes.estCedula, estudiantes.estNombre, estudiantes.estApellido, estudiantes.estTelefono, estudiantes.estDireccion,cursos.nombre FROM estudiantes,cursos where estudiantes.curId = cursos.curId;";
        //Al utilizar sqlsrv se deben cambiar las consultas ya que se trabaja con un objeto diferente
        //se usa sqlsrv_query y se manda primero el objeto de conexion y laa consulta
        $respuesta = sqlsrv_query($con, $sqlSelect);
        $resultado = array();

        //Se verifica si existe la respuesta y sqlsrv tiene un método para comprobar si tiene filas 
        if ($respuesta && sqlsrv_has_rows($respuesta)) {
            // Si hay filas, las obtenemos
            while ($fila = sqlsrv_fetch_array($respuesta, SQLSRV_FETCH_ASSOC)) {
                $resultado[] = $fila; // Agregamos cada fila al array de resultados
            }
        } else {
            // Si no hay filas, configuramos el mensaje
            $resultado = "No hay estudiantes";
        }
        //devolvemos el resultado como un JSON
        echo json_encode($resultado);
    }
}

?>