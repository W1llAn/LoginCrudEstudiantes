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
    
    
    

?>
