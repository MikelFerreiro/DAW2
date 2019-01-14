<?php

include_once 'Mamifero.php';
class Gato extends Mamifero {
    private $vidas;

    /**
     * Gato constructor.
     * @param $vidas
     */
    public function __construct($nombre,$sexo,$ruido,$raza,$vidas){
        parent::__construct($nombre,$sexo,$ruido,$raza);
        $this->vidas = $vidas;
    }


    /**
     * @return mixed
     */
    public function getVidas()
    {
        return $this->vidas;
    }

    /**
     * @param mixed $vidas
     */
    public function setVidas($vidas)
    {
        $this->vidas = $vidas;
    }

}