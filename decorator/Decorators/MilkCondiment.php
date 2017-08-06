<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:32 AM
 */

namespace DecoratorSample\Decorators;

class MilkCondiment extends CondimentsDecoratorBase {
    private $_beverage;

    public function __construct($beverage)
    {
        $this->_beverage = $beverage;
        $this->Description = $this->_beverage->GetDescription() . " +Milk";
    }

    public function GetCost() {
        return $this->_beverage->GetCost() + 50;
    }
}