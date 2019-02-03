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

    public function annadirLocal(){
        $local= new Local($this->conexion);
        $local->setNombre($_POST["nombre"]);
        $local->setCategoria($_POST["categoria"]);
        $local->setDireccion($_POST["direccion"]);
        $local->setTelefono($_POST["telefono"]);
        $local->setEmail($_POST["email"]);
        $mensaje="";
        if(!$local->annadir()){
            $mensaje="Ha ocurrido un error. El local no ha podido añadirse.";
        }
        $this->render("locales",array("locales"=>$local->getAll(),
                                            "mensaje"=>$mensaje));
    }

    public function editarLocal(){
        $local= new Local($this->conexion);
        $local->setIdLocal($_GET["idLocal"]);
        $local->getById();
        $this->render("localDetalle",array("local"=>$local));
    }
}