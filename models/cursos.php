<?php
class CrudC{
    public static function seleccionarCursos(){    
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $sqlSelect = "SELECT * FROM cursos";
        /* $respuesta = sqlsrv_query($con,$sqlSelect);
        $resultado = array();

        if ($respuesta && sqlsrv_has_rows($respuesta)) {
            // Si hay filas, las obtenemos
            while ($fila = sqlsrv_fetch_array($respuesta, SQLSRV_FETCH_ASSOC)) {
                $resultado[] = $fila; // Agregamos cada fila al array de resultados
            }
        } else {
            // Si no hay filas, configuramos el mensaje
            $resultado = "No hay cursos";
        } */
        $respuesta = $con->query($sqlSelect);
        $resultado = array();
        if ($respuesta->num_rows>0) {
            while($fila = $respuesta->fetch_array()){
                array_push($resultado,$fila);
            }
        }else {
            echo json_encode($resultado = 'No hay Cursos Registrados');
        }
        echo json_encode($resultado);
    }
}

?>