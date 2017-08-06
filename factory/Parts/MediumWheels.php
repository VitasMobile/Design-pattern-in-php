<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:04 PM
 */

namespace FactorySample\Parts;

class MediumWheels extends  Wheels {
    public function __construct()
    {
        $this->wheel = "Wheels are 16\"";
    }
}