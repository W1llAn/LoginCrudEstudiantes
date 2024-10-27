<?php
class Reporte{
    public static function crearReporte(){
    require('../fpdf186/fpdf.php');
    include '../models/conexion.php';
    $conn = new conexion();
    $con = $conn -> conectar();
    $sqlSelect = 'SELECT estudiantes.estCedula, estudiantes.estNombre, estudiantes.estApellido, estudiantes.estTelefono, estudiantes.estDireccion,cursos.nombre FROM estudiantes,cursos where estudiantes.curId = cursos.curId';
    $respuesta = sqlsrv_query($con,$sqlSelect);
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
    while($row=sqlsrv_fetch_array($respuesta, SQLSRV_FETCH_ASSOC)){
        $cedula = $row['estCedula'];
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
    }
}
?>