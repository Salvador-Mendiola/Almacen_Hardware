<?php

    function conexion(){
        $servidor = 'localhost';
        $usuario ='root';
        $password = '';
        $bd = 'conexion1';
        $puerto = 3306;
        $conectar = mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $bd,
            $puerto
        );
        return $conectar;
    }

    
?>