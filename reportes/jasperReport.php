<?php
require_once '../phpJasperXML_2.0.1/phpJasperXML_2.0.1/autoload.php'; // Ruta al archivo autoload.php
include '../models/conexion.php';
use simitsdk\phpjasperxml\PHPJasperXML;

// Instancia de la clase de conexión
$conn = new conexion();
$con = $conn->conectar();

// Ruta al archivo de reporte Jasper y directorio de salida
$input = __DIR__ . '/jasper/reporteGrafico.jrxml'; // Usar __DIR__ para obtener la ruta del archivo jasper
$output = __DIR__ . '/javaScripts'; // Directorio de salida

// Detalles de la conexión a la base de datos obtenidos de tu clase de conexión
$config = [
    'driver'=>'mysql',
    'host'=>'127.0.0.1:33065',
    'user'=>'root',
    'pass'=>'',
    'name'=>'cuarto',
];

$options = [
    'format' => ['pdf'],
    'params' => [], // Puedes pasar parámetros al reporte Jasper aquí
    'db_connection' => $db_connection
];

$jasper = new PHPJasperXML();
$jasper->load_xml_file($input);
    
?>
