<?php

    include 'conexion.php';
    $conn = new conexion();
    $con = $conn -> conectar();
    $cedula = $_POST['cedula'];
    $sqlBorrar = "DELETE FROM estudiantes WHERE estCedula='$cedula'";

    if($con -> query($sqlBorrar)== TRUE){
        echo json_encode('Se borro el estudiante');
    }
    else{
        echo json_encode('Fallo al borrar el estudiante'.$sqlBorrar.$mysqli->error);
    }



?>