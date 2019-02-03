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

    private $idLocal;

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
        $select->execute([$this->idLocal]);
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
    public function getIdLocal()
    {
        return $this->idLocal;
    }

    /**
     * @param mixed $idLocal
     */
    public function setIdLocal($idLocal): void
    {
        $this->idLocal = $idLocal;
    }




}