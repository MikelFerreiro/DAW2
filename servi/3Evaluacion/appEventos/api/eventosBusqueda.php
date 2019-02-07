<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../core/Conectar.php';
include_once '../model/Evento.php';


$conectar = new Conectar();
$conexion = $conectar->conexion();

$evento = new Evento($conexion);

$por=isset($_GET['por'])?$_GET['por']:die();
$busqueda=isset($_GET['busqueda'])?$_GET['busqueda']:die();
switch ($por){
    case "tipo":
        $evento->setTipo($busqueda);
        $eventos = $evento->getAllByTipo();
        break;

    case "local":
        $evento->setLocal($busqueda);
        $eventos = $evento->getAllByLocal();
        break;

    case "fecha":
        $evento->setFecha($busqueda);
        $eventos = $evento->getAllByFecha();
        break;

    default:
        $eventos=array();
        break;
}
    if(count($eventos)!=0) {

        http_response_code(200);
        echo json_encode($eventos);

    }else{

        http_response_code(404);
        echo json_encode(array("mensaje" => "La busqueda no ha devuelto ningún resultado"));
    }