<?php
function conectar(){
    // Conexión a la base de datos
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=ejerciciotienda;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
    }
    return $conexion;
}

function validarUsuario(){
    $consulta = conectar()->query("SELECT usuario, password FROM usuarios");
    $diccionario= array();
    while($usuario = $consulta ->fetchObject()){
        $diccionario[$usuario -> usuario]=$usuario -> password;
    }
    return $diccionario;
}


?>