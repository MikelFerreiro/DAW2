<?php

include_once 'Ave.php';

class Pinguino extends Ave {
    private $baila;

    public function __construct($nombre,$sexo,$ruido,$tieneAlas,$baila){
        parent::__construct($nombre,$sexo,$ruido,$tieneAlas);
        $this->baila = $baila;
    }

    /**
     * @return mixed
     */
    public function getBaila()
    {
        return $this->baila;
    }

    /**
     * @param mixed $baila
     */
    public function setBaila($baila)
    {
        $this->baila = $baila;
    }


}