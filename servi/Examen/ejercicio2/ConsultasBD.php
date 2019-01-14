<?php
require_once 'conexionBD.php';

function comprobarUsuario($usuario,$password){
    $conexion=conexionDb();
    $select = $conexion->prepare ("SELECT id FROM Usuario WHERE usuario=:usuario AND password=:password Limit 1");
    $select->execute(array(
        "usuario"=>$usuario,
        "password"=>$password
    ));
    if($select->rowCount()!==0){
        closeConexionDb($conexion);
        return $select->fetch()["id"];
    }else{
        return -1;
    }
}

function obtenerTareas($id){
    $conexion=conexionDb();
    $select = $conexion->prepare ("SELECT * FROM tarea WHERE usuario=?");
    $select->bindParam(1,$id);
    $select->execute();
    $tareas=array();
    while ($fila = $select->fetchObject()) {
        $tarea=array();
        array_push($tarea,$fila->usuario);
        array_push($tarea,$fila->texto);
        array_push($tarea,$fila->resuelta);
        array_push($tarea,$fila->id);
        array_push($tareas,$tarea);
    }
    closeConexionDb($conexion);
    return $tareas;
}

function insertarTareas($texto,$usuario){
    $conexion=conexionDb();
    $insert = $conexion->prepare ("INSERT INTO tarea(texto, usuario) VALUES (:texto,:usuario)");
    try{
        $insert->execute(array(
            "texto"=>$texto,
            "usuario"=>$usuario
        ));
    }catch (PDOException $e){
        $insert->rollBack();
        echo "Ha ocurrido un error",$e->getMessage();
    }
    closeConexionDb($conexion);
}

function borrarTareas($idTarea){
    $conexion=conexionDb();
    $delete = $conexion->prepare ("DELETE * FROM tarea where id=?");
    try{
        $delete->bindParam(1,$idTarea);
        $delete->execute();

    }catch (PDOException $e){
        $delete->rollBack();
        echo "Ha ocurrido un error",$e->getMessage();
    }
    closeConexionDb($conexion);
}
