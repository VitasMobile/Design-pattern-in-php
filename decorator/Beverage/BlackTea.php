<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:27 AM
 */

namespace DecoratorSample\Beverage;

require_once ("BeverageBase.php");

class BlackTea extends BeverageBase {
    public function __construct()
    {
        $this->Description = "Black tea from teabag";
    }

    public function GetCost() {
        return 25;
    }
}