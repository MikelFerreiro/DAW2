<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 13/12/2018
 * Time: 12:42
 */

class Bodega{
    private $conexion;

    private $id;
    private $nombre;
    private $direccion;
    private $localizacion;
    private $email;
    private $telefono;
    private $contacto;
    private $fundacion;
    private $restaurante;
    private $hotel;
    private $vinos;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function getAll(){

        $select = $this->conexion->prepare("SELECT * FROM BODEGAS ORDER by ID_BODEGA DESC");
        $select -> execute();
        $bodegas = $select ->fetchall();

        $this->conexion = null;

        return $bodegas;
    }

    public function getBodegaById(){

        $select = $this->conexion->prepare("SELECT * FROM BODEGAS WHERE ID_BODEGA=? LIMIT 1");
        $select -> execute([$this->id]) ;
        $bodega = $select ->fetch();
        $this->conexion = null;

        return $bodega;
    }

    public function altaBodega(){
        $insert = $this->conexion->prepare("INSERT INTO BODEGAS (NOMBRE, DIRECCION, LOCALIZACION, EMAIL, TELEFONO, CONTACTO, FUNDACION, RESTAURANTE, HOTEL) VALUES(:nombre,:direccion,:localizacion,:email,:tlfn,:contacto,:fundacion,:restaurante,:hotel)");
        try {
            $insert->execute(array(
                "nombre" => $this->nombre,
                "direccion" => $this->direccion,
                "localizacion" => $this->localizacion,
                "email" => $this->email,
                "tlfn" => $this->telefono,
                "contacto" => $this->contacto,
                "fundacion" => $this->fundacion,
                "restaurante" => $this->restaurante,
                "hotel" => $this->hotel
            ));
        } catch (PDOException $e) {
            $this->conexion = null;
            //devuelve false si ha ocurrido un error
            return false;
        }
        $this->conexion = null;
        return true;
    }

    public function borrarBodega(){
        $delete = $this->conexion->prepare("DELETE FROM BODEGAS WHERE ID_BODEGA = :idBodega");
        try {
            $delete->execute(array(
                "idBodega"=>$this->id
            ));
        } catch (PDOException $e) {
            $delete->PDO::rollback();
            $this->conexion = null;
            //devuelve false si ha ocurrido un error
            return false;
        }
        $this->conexion = null;
        return true;
    }

    public function modificarBodega(){
        $update = $this->conexion->prepare("UPDATE BODEGAS SET NOMBRE=:nombre,DIRECCION=:direccion,LOCALIZACION=:localizacion,EMAIL=:email,TELEFONO=:tlfn,CONTACTO=:contacto,FUNDACION=:fundacion,RESTAURANTE=:restaurante,HOTEL=:hotel WHERE ID_BODEGA=:idBodega");
        try {
            $update->execute(array(
                "nombre" => $this->nombre,
                "direccion" => $this->direccion,
                "localizacion" => $this->localizacion,
                "email" => $this->email,
                "tlfn" => $this->telefono,
                "contacto" => $this->contacto,
                "fundacion" => $this->fundacion,
                "restaurante" => $this->restaurante,
                "hotel" => $this->hotel,
                "idBodega" =>$this->id
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
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }

    /**
     * @param mixed $localizacion
     */
    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;
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
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * @param mixed $contacto
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;
    }

    /**
     * @return mixed
     */
    public function getFundacion()
    {
        return $this->fundacion;
    }

    /**
     * @param mixed $fundacion
     */
    public function setFundacion($fundacion)
    {
        $this->fundacion = $fundacion;
    }

    /**
     * @return mixed
     */
    public function getRestaurante()
    {
        return $this->restaurante;
    }

    /**
     * @param mixed $restaurante
     */
    public function setRestaurante($restaurante)
    {
        $this->restaurante = $restaurante;
    }

    /**
     * @return mixed
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * @param mixed $hotel
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
    }

    /**
     * @return mixed
     */
    public function getVinos()
    {
        return $this->vinos;
    }

    /**
     * @param mixed $vinos
     */
    public function setVinos($vinos)
    {
        $this->vinos = $vinos;
    }



}