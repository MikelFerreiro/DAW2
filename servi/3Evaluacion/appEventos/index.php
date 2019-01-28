<?php
require_once __DIR__ ."/config/global.php";
require_once __DIR__.'/vendor/autoload.php';

if(isset($_GET["controller"])){
    // Cargamos la instancia del controlador correspondiente
    $controllerObj=cargarControlador($_GET["controller"]);
    // Lanzamos la acción
    lanzarAccion($controllerObj);
}else{
    // Cargamos la instancia del controlador por defecto
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    // Lanzamos la acción
    lanzarAccion($controllerObj);
}

function cargarControlador($controller){

    try {

        $strFileController='controller/'.$controller.'Controller.php';

        if (!@include_once $strFileController){

            throw new Exception('Error');
        }
        else {

            require_once $strFileController;
        }

        $nombreController = $controller.'Controller';
        $controllerObj = new $nombreController();

        return $controllerObj;
    }
    catch (Exception $e){
        header('Location: index.php');
    }

    return null;

}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }else{
        $controllerObj->run(ACCION_DEFECTO);
    }
}
