<?php

class conexion{
    private $servername = "sql3.freemysqlhosting.net";
    private $username = "sql3743053";
    private $password = "fHRrBJMK4D";
    private $dbname = "sql3743053";
    private $conn;

    public function conectar(){
        /* $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Verificar si hay algún error en la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }

        // Retornar el objeto de conexión
        return $this->conn; */
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$conn) {
            //el die mata a todo los procesos y ya no hace nada mas
            echo ("error en la conexion" . mysqli_connect_error());
        } else {
            return $conn;
        }
    }
}


?>