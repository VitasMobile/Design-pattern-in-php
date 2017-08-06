<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:01 PM
 */

namespace FactorySample\Parts;

abstract class Wheels {
    protected $wheel;

    public function Show() {
        echo $this->wheel.'<br/>';
    }
}