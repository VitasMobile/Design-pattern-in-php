<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 12:54 PM
 */

namespace FactorySample\Parts;

abstract class Engine {
    protected $engine;

    public function Show() {
        echo $this->engine."<br/>";
    }
}