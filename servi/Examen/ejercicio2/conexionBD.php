<?php
function conexionDb(){
    $servername = "localhost";
    $username = "username";
    $password = "password";
    try {


        $conexion = new PDO("mysql:host=$servername;dbname=examen", $username, $password);
        return $conexion;
    }
    catch (PDOException $e) {
        echo "Falló en la conexión: ".$e->getMessage();
    }

    return null;

}

function closeConexionDb($conexion){

    $conexion = null;

}