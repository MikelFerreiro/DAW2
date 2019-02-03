<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 21/01/2019
 * Time: 17:19
 */

class Local{
    private $conexion;

    private $idLocal;
    private $nombre;
    private $categoria;
    private $direccion;
    private $telefono;
    private $email;

    private $eventos;


    public function __construct($conexion){
        $this->conexion=$conexion;
    }

    public function getAll(){
        $select=$this->conexion->prepare("SELECT id_local,nombre,categoria,direccion,telefono,email FROM LOCALES");
        $select->execute();
        $result=$select->fetchAll();

        $this->conexion=null;
        return $result;
    }

    public function annadir(){
        $insert=$this->conexion->prepare("INSERT INTO LOCALES (NOMBRE, CATEGORIA, DIRECCION, TELEFONO, EMAIL) VALUES (:nombre,:categoria,:direccion,:telefono,:email)");
        try{
            $insert->execute(array(
                "nombre"=>$this->nombre,
                "categoria"=>$this->categoria,
                "direccion"=>$this->direccion,
                "telefono"=>$this->telefono,
                "email"=>$this->email
            ));
        }catch (PDOException $e){
            $this->conexion=null;
            return false;
        }
        $this->conexion=null;
        return true;
    }

    public function getById(){
        $select=$this->conexion->prepare("SELECT * FROM LOCALES WHERE ID_LOCAL=?");
        $select->execute([$this->idLocal]);
        $result=$select->fetch(PDO::FETCH_ASSOC);
            $this->idLocal=$result["ID_LOCAL"];
            $this->nombre=$result["NOMBRE"];
            $this->categoria=$result["CATEGORIA"];
            $this->direccion=$result["DIRECCION"];
            $this->telefono=$result["TELEFONO"];
            $this->email=$result["EMAIL"];
        $this->conexion=null;
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
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria): void
    {
        $this->categoria = $categoria;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEventos()
    {
        return $this->eventos;
    }

    /**
     * @param mixed $eventos
     */
    public function setEventos($eventos): void
    {
        $this->eventos = $eventos;
    }


}