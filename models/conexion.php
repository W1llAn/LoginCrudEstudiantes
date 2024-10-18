<?php

class conexion{
    public function conectar(){
        
        $servername = 'localhost:33065';
        $username = 'root';
        $password = '';
        $dbname = 'cuarto';
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        
        if(!$conn){
            
            die('error en la conexion'.mysqli_connect_error());
        
        }
        else{
            return $conn;
        }
    }
}


?>