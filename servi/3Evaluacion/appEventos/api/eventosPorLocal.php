<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../core/Conectar.php';
include_once '../model/Evento.php';

// get database connection
$conectar = new Conectar();
$conexion = $conectar->conexion();

$evento = new Evento($conexion);

$evento->setIdLocal(isset($_GET['id']) ? $_GET['id'] : die());
$eventos=$evento->getAllByIdLocal();
    if(count($eventos)!=0){

        // set response code - 200 OK
        http_response_code(200);

        // make it json format
        echo json_encode($eventos);
    }else{
        // set response code - 404 Not found
        http_response_code(404);

        // tell the user product does not exist
        echo json_encode(array("message" => "No hay eventos para el local seleccionado"));
    }