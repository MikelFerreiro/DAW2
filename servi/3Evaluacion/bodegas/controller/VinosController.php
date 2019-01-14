<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 20/12/2018
 * Time: 9:41
 */

class vinosController{
    private $conectar;
    private $conexion;
    private $twig;

    public function __construct(){
        require_once __DIR__ .'/../vendor/autoload.php';
        require_once __DIR__ . "/../core/Conectar.php";
        require_once __DIR__ . "/../model/Vino.php";

        $this->conectar=new Conectar();
        $this->conexion=$this->conectar->conexion();

        $loader = new Twig_Loader_Filesystem("view");
        $this->twig = new Twig_Environment($loader);
    }

    public function run($accion){

        switch($accion){

            case "detalle":
                $this->detalle();
                break;
            case "alta" :
                $this->alta();
                break;
            case "annadir" :
                $this->annadir();
                break;
            case "editar" :
                //lleva a la pantalla de formulario para editar
                $this->editar();
                break;
            case "modificar" :
                //guarda la modificacion en BBDD
                $this->modificar();
                break;
            case "borrar" :
                $this->borrar();
                break;
            default:
                $this->index();
                break;
        }
    }


    public function index(){
        require_once __DIR__ . '/BodegasController.php';
        $bodegaController=new bodegasController();
        $bodegaController->carga();
    }

    public function detalle(){

        $vinoDetalle=$this->buscarVino();
        $this->view("vinoDetalle",array(
            "vino"=>$vinoDetalle
        ));
    }

    public function alta(){
        //a la hora de regresar del formulario de vinos a bodegaDetalle es necesario el id de la bodega
        $vino["ID_BODEGA"]=$_GET["idBodega"];

        $this->view("vinoForm",array(
            "vino"=>$vino
        ));
    }

    public function editar(){

        $vinoDetalle=$this->buscarVino();
        $this->view("vinoForm",array(
            "vino"=>$vinoDetalle
        ));
    }

    public function buscarVino(){

        $vino=new Vino($this->conexion);
        $vino->setId($_GET["idVino"]);
        $vinoDetalle= $vino->getVinoById();

        return $vinoDetalle;
    }

    public function annadir(){

        $vino=$this->recogerDatos();

        if($vino->altaVino()){
            //si todo va bien volvemos a la pantalla de detalleBodega
            $this->detalleBodega();
        }else{
            //si ocurre un error volvemos a la pantalla de alta de vinos con un mensaje de error
            $this->view("vinoForm",array(
                "mensaje"=>"Ha ocurrido un error. El vino no se ha guardado."
            ));
        }
    }

    public function modificar(){
        $vino=$this->recogerDatos();
        $vino->setId($_GET["idVino"]);

        if($vino->modificarVino()){
            //si todo va bien volvemos a la pantalla de detalle
            $this->detalle();
        }else{
            //si ocurre un error volvemos a la pantalla de alta de vinos (manteniendo los datos metidos por el usuario) con un mensaje de error
            $this->view("vinoForm",array(
                "vino"=>$vino,
                "mensaje"=>"Ha ocurrido un error. El vino no se ha modificado."
            ));
        }
    }

    public function recogerDatos(){

        $vino=new Vino($this->conexion);
        $vino->setNombre($_POST["nombre"]);
        $vino->setDescripcion($_POST["descripcion"]);
        $vino->setAnio($_POST["anio"]);
        $vino->setAlcohol($_POST["alcohol"]);
        $vino->setTipo($_POST["tipo"]);
        $vino->setIdBodega($_GET["idBodega"]);

        return $vino;
    }
    public function borrar(){

        $vino=new Vino($this->conexion);
        $vino->setId($_GET["idVino"]);
        if($vino->borrarVino()){
            //si todo va bien volvemos a la pantalla de detalleBodega
            $this->detalleBodega();
        }else{
            //si ocurre un error volvemos a cargar las bodegas (por si se hubiera añadido otra en el proceso) y volvemos a la pantalla principal con un mensaje de error
            $vinos= $vino->getAll();
            $this->view("index",array(
                "bodegas"=>$vinos,
                "mensaje"=>"Ha ocurrido un error. La bodega a podido borrarse."
            ));
        }
    }

    public function detalleBodega(){
        require_once __DIR__ . '/BodegasController.php';
        $bodegaController=new bodegasController();
        $bodegaController->detalle();
    }

    public function view($vista,$datos){

        $vinos = $datos["vinos"]  ?? null;
        $vino = $datos["vino"] ?? null;
        $mensaje = $datos["mensaje"] ?? null;

        echo  $this->twig->render( $vista . "View.html.twig",array(
            "vino"=>$vino,
            "mensaje"=>$mensaje,
            "vinos"=>$vinos
        ));
    }
}