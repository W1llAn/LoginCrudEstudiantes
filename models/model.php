<?php
class EnlacesPaginas{
    public static function enlacesPaginasModel($enlaceModel){
        if($enlaceModel=="nosotros" || $enlaceModel == "servicios" || $enlaceModel == "contactanos"||$enlaceModel == "iniciarSesion"){
            $module = "views/interface/{$enlaceModel}.php";
        }
        else{
            $module = "views/interface/inicio.php";
        }

        return $module;
        
    }
}



?>