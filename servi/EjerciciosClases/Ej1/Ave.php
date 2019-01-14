<?php

include_once 'animal.php';

class Ave extends Animal {
    private $tieneAlas;

    /**
     * Mamifero constructor.
     * @param $raza
     */

    public function __construct($nombre,$sexo,$ruido,$tieneAlas){
        parent::__construct($nombre,$sexo,$ruido);
        $this->tieneAlas = $tieneAlas;
    }

    /**
     * @return mixed
     */
    public function getTieneAlas()
    {
        return $this->tieneAlas;
    }

    /**
     * @param mixed $tieneAlas
     */
    public function setTieneAlas($tieneAlas)
    {
        $this->tieneAlas = $tieneAlas;
    }


}