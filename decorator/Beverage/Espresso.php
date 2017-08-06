<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:27 AM
 */

namespace DecoratorSample\Beverage;

require_once ("BeverageBase.php");

class Espresso extends BeverageBase {
    public function __construct()
    {
        $this->Description = "Small portion of strong coffe";
    }

    public function GetCost() {
        return 150;
    }
}