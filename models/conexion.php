<?php

class conexion{
    public function conectar(){
        // SQL Server Extension Sample Code:
        //Al usar una base de datos remota en Azure se utiliza la extensión sqlsrv y la línea de conexión que proporciona Azure
        try {
            //Se agregan los datos de la base de datos
            /* UID(userid) = nombre de usuario = administradorSOA
            pwd = contraseña = Soa_estudiantes159@ */
            $connectionInfo = array("UID" => "administradorSOA", "pwd" => "{Soa_estudiantes159@}", "Database" => "estudiantes-quinto", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
            //El nombre del servidor se crea aparte
            $serverName = "tcp:crud-estudiantes.database.windows.net,1433";
            //Se envia establece la conexión usando sqlsrv_connect
            $conn = sqlsrv_connect($serverName, $connectionInfo);
            if(!$conn){
                die('error en la conexion'.mysqli_connect_error());
            }
            else{
                //En caso de ser exitoso se retorna el objeto
                return $conn;
            }
        } catch (\Throwable $th) {
            echo $th;
        }
        
    }
}


?>