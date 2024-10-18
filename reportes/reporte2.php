<?php

    require('../fpdf186/fpdf.php');
    include '../models/conexion.php';
    $conn = new conexion();
    $con = $conn -> conectar();
    $cedula = $_GET['cedula'];
    $sqlSelect = "SELECT estudiantes.estCedula, estudiantes.estNombre, estudiantes.estApellido, estudiantes.estTelefono, estudiantes.estDireccion,cursos.nombre FROM estudiantes,cursos where estudiantes.curId = cursos.curId AND estudiantes.estCedula = '$cedula'";
    $respuesta = $con -> query($sqlSelect);
    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf -> SetFont('Arial','B',11);
    $pdf -> Cell(30,10,'cedula',1);
    $pdf -> Cell(30,10,'nombre',1);
    $pdf -> Cell(30,10,'apellido',1);
    $pdf -> Cell(30,10,'telefono',1);
    $pdf -> Cell(35,10,'direccion',1);
    $pdf -> Cell(30,10,'curso',1);
    $pdf ->Ln();
    while($row=$respuesta->fetch_array()){
        $nombre = $row['estNombre'];
        $apellido = $row['estApellido'];
        $telefono = $row['estTelefono'];
        $direccion = $row['estDireccion'];
        $curso = $row['nombre'];
        $pdf -> Cell(30,10,$cedula,1);
        $pdf -> Cell(30,10,$nombre,1);
        $pdf -> Cell(30,10,$apellido,1);
        $pdf -> Cell(30,10,$telefono,1);
        $pdf -> Cell(35,10,$direccion,1);
        $pdf -> Cell(30,10,$curso,1);
        $pdf ->Ln();
    }
    $pdf -> OutPut();
    
?>