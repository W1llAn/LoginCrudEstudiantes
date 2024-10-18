<?php

    include 'conexion.php';
    $conn = new conexion();
    $con = $conn -> conectar();
    $sqlSelect = "SELECT curId, nombre FROM cursos";
    $respuesta = $con -> query($sqlSelect);
    $resultado = array();

    if($respuesta -> num_rows > 0){
        while($fila = $respuesta -> fetch_array()){
            array_push($resultado,$fila);
        }
    }
    else{
        $resultado = "No hay cursos";
    }
    echo json_encode($resultado);



?>