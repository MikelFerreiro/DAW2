<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 20/12/2018
 * Time: 9:41
 */

class bodegasController{
    private $conectar;
    private $conexion;
    private $twig;

    public function __construct(){
        require_once __DIR__ .'/../vendor/autoload.php';
        require_once __DIR__ . "/../core/Conectar.php";
        require_once __DIR__ . "/../model/Bodega.php";

        $this->conectar=new Conectar();
        $this->conexion=$this->conectar->conexion();

        $loader = new Twig_Loader_Filesystem("view");
        $this->twig = new Twig_Environment($loader);
    }

    public function run($accion){

        switch($accion){
            case "carga" :
                $this->carga();
                break;
            case "detalle":
                $this->detalle();
                break;
            case "alta" :
                $this->view("bodegaForm",null);
                break;
            case "annadir" :
                $this->annadir();
                break;
            case "editar" :
                $this->editar();
                break;
            case "modificar" :
                $this->modificar();
                break;
            case "borrar" :
                $this->borrar();
                break;
            default:
                $this->carga();
                break;
        }
    }

    public function carga(){

        $bodega=new Bodega($this->conexion);
        $bodegas= $bodega->getAll();
        $this->view("index",array(
            "bodegas"=>$bodegas
        ));
    }

    public function detalle(){

        require_once __DIR__ . "/../model/Vino.php";

        $bodegaDetalle=$this->buscarBodega();
        $vino=new Vino($this->conexion);
        $vino->setIdBodega($_GET["idBodega"]);
        $vinos=$vino->getAllByBodega();

        $this->view("bodegaDetalle",array(
            "bodega"=>$bodegaDetalle,
            "vinos"=>$vinos
        ));
    }

    public function editar(){
        $bodegaDetalle=$this->buscarBodega();
        $this->view("bodegaForm",array(
            "bodega"=>$bodegaDetalle
        ));
    }

    public function buscarBodega(){

        $bodega=new Bodega($this->conexion);
        $bodega->setId($_GET["idBodega"]);
        $bodegaDetalle= $bodega->getBodegaById();

        return $bodegaDetalle;
    }

    public function annadir(){

        $bodega=$this->recogerDatos();

        if($bodega->altaBodega()){
            //si todo va bien volvemos a la pantalla principal
            $this->carga();
        }else{
            //si ocurre un error volvemos a la pantalla de alta de bodegas con un mensaje de error
            $this->view("bodegaForm",array(
                "mensaje"=>"Ha ocurrido un error. La bodega no se ha guardado."
            ));
        }
    }

    public function modificar(){
        $bodega=$this->recogerDatos();
        $bodega->setId($_GET["idBodega"]);

        if($bodega->modificarBodega()){
            //si todo va bien volvemos a la pantalla de detalle
            $this->detalle();
        }else{
            //si ocurre un error volvemos a la pantalla de alta de bodegas (manteniendo los datos metidos por el usuario) con un mensaje de error
            $this->view("bodegaForm",array(
                "bodega"=>$bodega,
                "mensaje"=>"Ha ocurrido un error. La bodega no se ha modificado."
            ));
        }
    }

    public function recogerDatos(){
        $bodega=new Bodega($this->conexion);
        $bodega->setNombre($_POST["nombre"]);
        $bodega->setDireccion($_POST["direccion"]);
        $bodega->setLocalizacion($_POST["localizacion"]);
        $bodega->setEmail($_POST["email"]);
        $bodega->setTelefono($_POST["tlfn"]);
        $bodega->setContacto($_POST["contacto"]);
        $bodega->setFundacion($_POST["fundacion"]);
        $bodega->setRestaurante($_POST["restaurante"]);
        $bodega->setHotel($_POST["hotel"]);

        return $bodega;
    }
    public function borrar(){

        $bodega=new Bodega($this->conexion);
        $bodega->setId($_GET["idBodega"]);
        if($bodega->borrarBodega()){
            //si todo va bien volvemos a la pantalla principal
            $this->carga();
        }else{
            //si ocurre un error volvemos a cargar las bodegas (por si se hubiera añadido otra en el proceso) y volvemos a la pantalla principal con un mensaje de error
            $bodegas= $bodega->getAll();
            $this->view("index",array(
                "bodegas"=>$bodegas,
                "mensaje"=>"Ha ocurrido un error. La bodega a podido borrarse."
            ));
        }
    }

    public function view($vista,$datos){
        $bodegas = $datos["bodegas"]  ?? null;
        $bodega = $datos["bodega"] ?? null;
        $mensaje = $datos["mensaje"] ?? null;
        $vinos = $datos["vinos"] ?? null;

        echo  $this->twig->render( $vista . "View.html.twig",array(
            "bodegas"=>$bodegas,
            "bodega"=>$bodega,
            "mensaje"=>$mensaje,
            "vinos"=>$vinos
        ));
    }
}