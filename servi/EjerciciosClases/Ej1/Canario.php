<?php

include_once 'Ave.php';

class Canario extends Ave {
    private $colores;

    public function __construct($nombre,$sexo,$ruido,$tieneAlas,$colores){
        parent::__construct($nombre,$sexo,$ruido,$tieneAlas);
        $this->colores = $colores;
    }

    /**
     * @return mixed
     */
    public function getColores()
    {
        return $this->colores;
    }

    /**
     * @param mixed $colores
     */
    public function setColores($colores)
    {
        $this->colores = $colores;
    }

}