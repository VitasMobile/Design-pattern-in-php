<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:27 AM
 */

namespace DecoratorSample\Beverage;

class GreenTea extends BeverageBase {
    public function __construct()
    {
        $this->Description = "Green leaf tea";
    }

    public function GetCost() {
        return 150;
    }
}