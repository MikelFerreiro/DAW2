<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 11/12/2018
 * Time: 10:32
 */

class Empleado{
    private $conexion;

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $telefono;

    public function __construct($conexion){
        $this->conexion=$conexion;

    }

    public function getAll(){

        $select = $this->conexion->prepare("SELECT * from empleados");

        $empleados = $select -> execute()->fetchall();

        $this->conexion = null;
        return $empleados;
    }

    public function guardarEmpleado(){
        $consulta = $this->conexion->prepare("INSERT INTO empleados (nombre,apellidos,email,telefono)
                                        VALUES (:nombre,:apellidos,:email,:telefono)");
        $save = $consulta->execute(array(
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "email" => $this->email,
            "telefono" => $this->telefono
        ));
        $this->conexion = null;

        return $save;
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
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
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

}