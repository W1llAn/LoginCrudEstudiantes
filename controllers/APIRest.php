<?php
include_once '../models/acceder.php';
include_once '../models/guardar.php';
include_once '../models/borrar.php';
include_once '../models/editar.php';
include_once '../models/cursos.php';
include_once '../reportes/reporte.php';
include_once '../reportes/reporte2.php';


    //REQUESTMETHOD .- Devuelve si estoy en un get, put, delete
    $opc = $_SERVER['REQUEST_METHOD'];
    /* echo $opc; */
    switch ($opc) {
        case 'GET':
            if (isset($_GET['tipo']) && $_GET['tipo'] == 'estudiantes') {
                CrudS::seleccionarEstudiantes();                
            } elseif (isset($_GET['report']) && $_GET['report'] == '1') {
                Reporte::crearReporte();                
            } elseif (isset($_GET['report']) && $_GET['report'] == '2') {
                Reporte2::crearReporte2();
            } else {
                CrudC::seleccionarCursos();
            }
            break;
        case 'POST':
            CrudG::crearEstudiante();
            break;
        case 'DELETE':
            CrudB::borrarEstudiante();
            break;
        case 'PUT':
            CrudE::editarEstudiante();
            break;
        /* case 'REPORT':
            if (isset($_GET['report']) && $_GET['report'] == '1') {
                Reporte::crearReporte();                
            }else{
                Reporte2::crearReporte2();
            } */
        default:
            # code...
            break;
    }
    


?>