<?php
require_once '../phpJasperXML_2.0.1/phpJasperXML_2.0.1/autoload.php'; 
use simitsdk\phpjasperxml\PHPJasperXML;

// Ruta del archivo JRXML
$filename = '../jasper/reporteDetall.jrxml';

try {
    $dbh = new PDO('mysql:host=localhost:33065;dbname=cuarto', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configura PDO para lanzar excepciones en errores
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit(); // Salir del script si hay un error de conexión
}

// Intenta ejecutar la consulta y captura cualquier excepción que pueda surgir
try {
    $stmt = $dbh->prepare('SELECT * from estudiantes');
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Configuración de la fuente de datos
    $config = ['driver' => 'array', 'data' => $data];

    // Crear una instancia de PHPJasperXML y procesar el informe
    $report = new PHPJasperXML();
    $report->load_xml_file($filename)    
        ->setDataSource($config)
        ->export('Pdf');
} catch (PDOException $e) {
    echo "Error al ejecutar la consulta: " . $e->getMessage();
    exit(); // Salir del script si hay un error de consulta
} catch (Exception $e) {
    echo "Error general: " . $e->getMessage();
    exit(); // Salir del script si hay un error general
}
?>
