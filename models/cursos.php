<?php
class CrudC{
    public static function seleccionarCursos(){    
        include 'conexion.php';
        $conn = new conexion();
        $con = $conn -> conectar();
        $sqlSelect = "SELECT * FROM cursos";
        $respuesta = $con -> query($sqlSelect);
        $resultado = array();

        if($respuesta -> num_rows > 0){
            while($fila = $respuesta -> fetch_assoc()){
                array_push($resultado,$fila);
            }
        }
        else{
            $resultado = "No hay cursos";
        }
        echo json_encode($resultado);
    }
}

?>