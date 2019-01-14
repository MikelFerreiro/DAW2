<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 13/12/2018
 * Time: 12:57
 */

class vino{
    private $conexion;

    private $id;
    private $nombre;
    private $descripcion;
    private $anio;
    private $alcohol;
    private $tipo;
    private $idBodega;

    public function __construct($conexion){
        $this->conexion=$conexion;

    }

    public function getAllByBodega(){
        $select= $this->conexion->prepare("SELECT * FROM VINOS WHERE ID_BODEGA = ?");
        $select -> execute([$this->idBodega]) ;
        $vinos=$select->fetchall();

        $this->conexion = null;

        return $vinos;
    }

    public function getVinoById(){

        $select = $this->conexion->prepare("SELECT * FROM VINOS WHERE ID_VINO=? LIMIT 1");
        $select -> execute([$this->id]) ;
        $vino = $select ->fetch();
        $this->conexion = null;

        return $vino;
    }

    public function altaVino(){
        $insert = $this->conexion->prepare("INSERT INTO VINOS (NOMBRE, DESCRIPCION, ANIO, ALCOHOL, TIPO, ID_BODEGA) VALUES(:nombre,:descripcion,:anio,:alcohol,:tipo,:idBodega)");
        try {
            $insert->execute(array(
                "nombre" => $this->nombre,
                "descripcion" => $this->descripcion,
                "anio" => $this->anio,
                "alcohol" => $this->alcohol,
                "tipo" => $this->tipo,
                "idBodega" => $this->idBodega
            ));
        } catch (PDOException $e) {
            $this->conexion = null;
            //devuelve false si ha ocurrido un error
            return false;
        }
        $this->conexion = null;
        return true;
    }

    public function borrarVino(){
        $delete = $this->conexion->prepare("DELETE FROM VINOS WHERE ID_VINO = ?");
        try {
            $delete->execute([$this->id]);
        } catch (PDOException $e) {
            $delete->PDO::rollback();
            $this->conexion = null;
            //devuelve false si ha ocurrido un error
            return false;
        }
        $this->conexion = null;
        return true;
    }

    public function modificarVino(){
        $update = $this->conexion->prepare("UPDATE VINOS SET NOMBRE=:nombre,DESCRIPCION=:descripcion,ANIO=:anio,ALCOHOL=:alcohol,TIPO=:tipo WHERE ID_VINO=:idVino");
        try {
            $update->execute(array(
                "nombre" => $this->nombre,
                "descripcion" => $this->descripcion,
                "anio" => $this->anio,
                "alcohol" => $this->alcohol,
                "tipo" => $this->tipo,
                "idVino"=> $this->id
            ));
        } catch (PDOException $e) {
            $update->PDO::rollback();
            $this->conexion = null;
            //devuelve false si ha ocurrido un error
            return false;
        }
        $this->conexion = null;
        return true;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * @param mixed $anio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    /**
     * @return mixed
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * @param mixed $alcohol
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getIdBodega()
    {
        return $this->idBodega;
    }

    /**
     * @param mixed $idBodega
     */
    public function setIdBodega($idBodega): void
    {
        $this->idBodega = $idBodega;
    }


}