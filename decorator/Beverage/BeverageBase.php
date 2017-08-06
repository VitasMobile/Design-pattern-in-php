<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:26 AM
 */

namespace DecoratorSample\Beverage;

abstract class BeverageBase {
    protected $Description = "";

    public function GetDescription() {
        return $this->Description;
    }

    public abstract function GetCost();
}