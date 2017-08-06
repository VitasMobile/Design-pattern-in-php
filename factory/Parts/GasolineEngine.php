<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 12:55 PM
 */

namespace FactorySample\Parts;

class GasolineEngine extends Engine {
    public function __construct()
    {
        $this->engine = "Engine is gasoline";
    }
}