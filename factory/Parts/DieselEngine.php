<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 12:56 PM
 */

namespace FactorySample\Parts;

require_once ("Engine.php");

class DieselEngine extends Engine {
    public function __construct()
    {
        $this->engine = "Engine is diesel";
    }
}