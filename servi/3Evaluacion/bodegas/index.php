<?php
require_once __DIR__ ."/config/global.php";


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

    switch ($controller) {
        case 'bodegas':
            $strFileController='controller/BodegasController.php';
            require_once $strFileController;
            $controllerObj=new bodegasController();
            break;

        case 'vinos':
            $strFileController='controller/VinosController.php';
            require_once $strFileController;
            $controllerObj=new vinosController();
            break;

        default:
            $strFileController='controller/BodegasController.php';
            require_once $strFileController;
            $controllerObj=new bodegasController();
            break;
    }
    return $controllerObj;
}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"])){
        $controllerObj->run($_GET["action"]);
    }else{
        $controllerObj->run(ACCION_DEFECTO);
    }
}
