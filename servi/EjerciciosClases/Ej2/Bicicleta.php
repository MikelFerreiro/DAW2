<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 04/12/2018
 * Time: 10:34
 */
include_once 'Vehiculo.php';

class Bicicleta extends Vehiculo {
    private $kmkRecorridos;

    public function andar($km){
        $this->kmkRecorridos+=$km;
        parent::
    }

    /**
     * @return mixed
     */
    public function getKmkRecorridos()
    {
        return $this->kmkRecorridos;
    }

    /**
     * @param mixed $kmkRecorridos
     */
    public function setKmkRecorridos($kmkRecorridos)
    {
        $this->kmkRecorridos = $kmkRecorridos;
    }

}