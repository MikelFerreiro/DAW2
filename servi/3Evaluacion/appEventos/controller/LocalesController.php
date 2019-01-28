<?php

require_once 'IndexController.php';

class LocalesController extends indexController {
    private $conectar;
    private $conexion;

    public function __construct(){
        require_once __DIR__ . '/../core/Conectar.php';
        require_once __DIR__ . '/../model/Local.php';

        $this->conectar = new Conectar();
        $this->conexion = $this->conectar->conexion();
    }

    public function index(){
        $local= new Local($this->conexion);
        $locales=$local->getAll();
        $this->render("locales",array("locales"=>$locales));
    }
}