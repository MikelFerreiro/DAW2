<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 13/12/2018
 * Time: 13:28
 */

class EmpleadosController{

    private $conectar;
    private $conexion;

    public function __construct() {
        require_once  __DIR__ . "/../core/Conectar.php";
        require_once  __DIR__ . "/../model/Empleado.php";

        $this->conectar=new Conectar();
        $this->conexion=$this->conectar->conexion();

    }

    public function run($accion){
        switch($accion)
        {
            case "index" :
                $this->index();
                break;
            case "alta" :
                $this->crear();
                break;
            default:
                $this->index();
                break;
        }
    }

    public function cargarEmpleados(){
        $empleado=new Empleado($this->conexion);

        $empleados=$empleado->getAll();

        require_once  __DIR__ . "/../view/indexView.php";

    }
}