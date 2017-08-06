<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:23 PM
 */

namespace FactorySample\Facilities;

require_once ("VolkswagenFacility.php");
require_once ("PartsFactory/RussianCarPartsFactory.php");

use FactorySample\Cars\Golf;
use FactorySample\Cars\Passat;
use FactorySample\Cars\Tiguan;
use FactorySample\Cars\Touareg;
use FactorySample\PartsFactory\RussianCarPartsFactory;

class RussianVolkswagenFacility extends VolkswagenFacility {
    protected function CreateCar($type) {
        $factory = new RussianCarPartsFactory();

        if ($type == "Golf")
            return new Golf($factory);
        else if ($type == "Passat")
            return new Passat($factory);
        else if ($type == "Tiguan")
            return new Tiguan($factory);
        else if ($type == "Touareg")
            return new Touareg($factory);
        else
            return null;
    }
}