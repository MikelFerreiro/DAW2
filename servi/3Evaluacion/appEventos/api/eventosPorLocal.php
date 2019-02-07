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

$evento->setLocal(isset($_GET['id']) ? $_GET['id'] : die());
$eventos=$evento->getAllByIdLocal();
    if(count($eventos)!=0){

        http_response_code(200);
        echo json_encode($eventos);
    }else{

        http_response_code(404);
        echo json_encode(array("mensaje" => "No hay eventos para el local seleccionado"));
    }