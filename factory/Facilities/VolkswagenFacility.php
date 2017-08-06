<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:24 PM
 */

namespace FactorySample\Facilities;

require_once ("Cars/Golf.php");
require_once ("Cars/Passat.php");
require_once ("Cars/Tiguan.php");
require_once ("Cars/Touareg.php");

abstract class VolkswagenFacility {
    protected abstract function CreateCar($type);

    public function GetCar($type) {
        $car = $this->CreateCar($type);
        $car->Configure();
    }
}