<?php


require_once 'IndexController.php';

class EventosController extends indexController{

    private $conectar;
    private $conexion;

    public function __construct(){
        require_once __DIR__ . '/../core/Conectar.php';
        require_once __DIR__ . '/../model/Evento.php';

        $this->conectar = new Conectar();
        $this->conexion = $this->conectar->conexion();
    }

    public function index(){
        $evento= new Evento($this->conexion);
        $eventos=$evento->getAll();
        $this->render("index",array("eventos"=>$eventos));
    }
}