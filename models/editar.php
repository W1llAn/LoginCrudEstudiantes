<?php
    include 'conexion.php';
    $conn = new conexion();
    $con = $conn -> conectar();

    $cedula = $_POST['cedula'];
    $nombre = $_POST['estNombre'];
    $apellido = $_POST['estApellido'];
    $direccion = $_POST['estDireccion'];
    $telefono = $_POST['estTelefono'];
    $curId = $_POST['curId'];

    $sqlEditar = "UPDATE estudiantes SET estNombre = '$nombre', estApellido = '$apellido', estDireccion = '$direccion', estTelefono = '$telefono', curId = $curId WHERE estCedula = '$cedula'";

    if($con -> query($sqlEditar)== TRUE){
        echo json_encode('Se edito el estudiante');
    }
    else{
        echo json_encode('Fallo al borrar el estudiante'.$sqlEditar.$mysqli->error);
    }

?>