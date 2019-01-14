<?php

include_once 'Mamifero.php';
class Perro extends Mamifero {
    private $amigos;

    /**
     * Gato constructor.
     * @param $vidas
     */
    public function __construct($nombre,$sexo,$ruido,$raza,$amigos){
        parent::__construct($nombre,$sexo,$ruido,$raza);
        $this->amigos = $amigos;
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