<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:02 PM
 */

namespace FactorySample\Parts;

require_once ("Wheels.php");

class BigWheels extends Wheels {
    public function __construct()
    {
        $this->wheel = "Wheels are 17\"";
    }
}