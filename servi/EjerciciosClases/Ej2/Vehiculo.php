<?php
/**
 * Created by PhpStorm.
 * User: 2gdaw04
 * Date: 04/12/2018
 * Time: 10:21
 */

class Vehiculo{
    private static $kmTotales=0;
    public function getVehiculosCreados(){

    }

    /**
     * @return int
     */
    public static function getKmTotales(): int
    {
        return self::$kmTotales;
    }

    /**
     * @param int $kmTotales
     */
    public static function setKmTotales(int $kmTotales)
    {
        self::$kmTotales = $kmTotales;
    }

}