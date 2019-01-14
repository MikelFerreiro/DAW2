<?php

include_once 'animal.php';

class Lagarto extends Animal {
    private $tamanio;


    public function __construct($nombre,$sexo,$ruido,$tamanio){
        parent::__construct($nombre,$sexo,$ruido);
        $this->tamanio = $tamanio;
    }

    /**
     * @return mixed
     */
    public function getTamanio()
    {
        return $this->tamanio;
    }

    /**
     * @param mixed $tamanio
     */
    public function setTamanio($tamanio)
    {
        $this->tamanio = $tamanio;
    }




}