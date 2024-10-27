<?php
class EnlacesPaginas {
        public static function enlacesPaginasModel($enlaceModel){
            if($enlaceModel=="nosotros" ||$enlaceModel=="nosotros_cliente"|| $enlaceModel == "servicios" || $enlaceModel == "servicios_cliente"|| $enlaceModel == "contactanos"||$enlaceModel == "iniciarSesion"||$enlaceModel == "iniciarSesion" ){
                $module = "views/interface/{$enlaceModel}.php";
            }
            else{
                $module = "views/interface/inicio.php";
            }
    
            return $module;
            
        }
    }
    
    
    /* public static function enlacesPaginasModel($enlaceModel) {
        $routesAdmin = ["nosotros", "servicios", "contactanos"];
        $routesCliente = ["nosotros_cliente", "servicios_cliente", "contactanos"];
        $defaultRoute = "views/interface/inicio.php";
        
        session_start();
        if (!isset($_SESSION['usuario']) || !isset($_SESSION['rol'])) {
            return "views/interface/iniciarSesion.php";
        }

        $rol = $_SESSION['rol'];

        if ($rol === 'admin' && in_array($enlaceModel, $routesAdmin)) {
            $module = "views/interface/{$enlaceModel}.php";
        } elseif ($rol === 'cliente' && in_array($enlaceModel, $routesCliente)) {
            $module = "views/interface/{$enlaceModel}.php";
        } else {
            $module = $defaultRoute;
        }

        return $module;
    } */

?>
