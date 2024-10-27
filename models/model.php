<?php
class EnlacesPaginas {
    public static function enlacesPaginasModel($enlaceModel) {
        // Verificar si el usuario está logueado a través de una sesión o variable.
        $isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;

        // Definir el módulo por defecto.
        $module = $isLoggedIn ? "views/interface/inicio.php" : "views/interface/ini.php";

        // Usar switch para seleccionar el módulo según la acción.
        switch ($enlaceModel) {
            case "nosotros":
            case "nosotros_cliente":
            case "servicios":
            case "servicios_cliente":
            case "inicio":
            case "contactanos":
            case "iniciarSesion":
                $module = "views/interface/{$enlaceModel}.php";
                break;
        }

        return $module;
    }
}
?>
