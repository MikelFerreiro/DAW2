<?php

include_once 'animal.php';

class Mamifero extends Animal {
    private $raza;

    /**
     * Mamifero constructor.
     * @param $raza
     */

    public function __construct($nombre,$sexo,$ruido,$raza){
        parent::__construct($nombre,$sexo,$ruido);
        $this->raza = $raza;
    }

    /**
     * @return mixed
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * @param mixed $raza
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;
    }


}