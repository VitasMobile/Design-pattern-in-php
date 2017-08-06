<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 12:59 PM
 */

namespace FactorySample\Parts;

abstract class Paint {
    protected $color;

    public function Show() {
        echo $this->color."<br/>";
    }
}