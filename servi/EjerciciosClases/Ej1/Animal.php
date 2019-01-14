<?php
class Animal{
    private $nombre;
    private $sexo;
    private $ruido;


    public function __construct($n,$s,$r) {
        $this->nombre = $n;
        $this->sexo = $s;
        $this->ruido = $r;
    }


    public function hacerRuido($raza){
        echo "el/la ",$raza," hace ",$this->ruido;
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
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getRuido()
    {
        return $this->ruido;
    }

    /**
     * @param mixed $ruido
     */
    public function setRuido($ruido)
    {
        $this->ruido = $ruido;
    }


}