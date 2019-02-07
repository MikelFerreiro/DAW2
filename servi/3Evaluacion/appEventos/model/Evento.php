<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 21/01/2019
 * Time: 17:19
 */

class Evento{

    private $conexion;

    private $idEvento;
    private $nombre;
    private $tipo;
    private $fecha;
    private $descripcion;

    private $local;

    public function __construct($conexion){
        $this->conexion=$conexion;
    }

    public function getAll(){
        $select=$this->conexion->prepare("SELECT ID_EVENTO,E.NOMBRE AS nombreEvento,TIPO,FECHA,DESCRIPCION,l.NOMBRE AS nombreLocal FROM EVENTOS E,LOCALES L WHERE E.ID_LOCAL=L.ID_LOCAL");
        $select->execute();
        $result=$select->fetchAll();

         $this->conexion=null;
         return $result;
    }

    public function getAllByIdLocal(){
        $select=$this->conexion->prepare("SELECT ID_EVENTO as idEvento,NOMBRE as nombre,TIPO as tipo,FECHA as fecha,DESCRIPCION as descripcion FROM EVENTOS WHERE ID_LOCAL=?");
        $select->execute([$this->local]);
        $result=$select->fetchAll();

        $this->conexion=null;
        return $result;
    }

    public function getAllByTipo(){
        $select=$this->conexion->prepare("SELECT E.NOMBRE AS nombreEvento, tipo, fecha, descripcion,l.NOMBRE AS nombreLocal FROM EVENTOS E,LOCALES L WHERE E.ID_LOCAL=L.ID_LOCAL AND TIPO = ?");
        $select->execute([$this->tipo]);
        $result=$select->fetchAll();

        $this->conexion=null;
        return $result;
    }

    public function getAllByLocal(){
        $select=$this->conexion->prepare("SELECT E.NOMBRE AS nombreEvento,tipo, fecha, descripcion,l.NOMBRE AS nombreLocal FROM EVENTOS E,LOCALES L WHERE E.ID_LOCAL=L.ID_LOCAL AND E.ID_LOCAL = (SELECT ID_LOCAL FROM LOCALES WHERE NOMBRE LIKE ?)");
        $select->execute([$this->local]);
        $result=$select->fetchAll();

        $this->conexion=null;
        return $result;
    }

    public function getAllByFecha(){
        $select=$this->conexion->prepare("SELECT E.NOMBRE AS nombreEvento,tipo, fecha, descripcion,l.NOMBRE AS nombreLocal FROM EVENTOS E,LOCALES L WHERE E.ID_LOCAL=L.ID_LOCAL AND FECHA = ?");
        $select->execute([$this->fecha]);
        $result=$select->fetchAll();

        $this->conexion=null;
        return $result;
    }


    /**
     * @return mixed
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * @param mixed $idEvento
     */
    public function setIdEvento($idEvento): void
    {
        $this->idEvento = $idEvento;
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
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
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
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
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
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @param mixed $local
     */
    public function setLocal($local): void
    {
        $this->local = $local;
    }




}