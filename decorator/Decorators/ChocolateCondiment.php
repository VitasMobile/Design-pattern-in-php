<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:28 AM
 */
namespace DecoratorSample\Decorators;

class ChocolateCondiment extends CondimentsDecoratorBase {
    private $_beverage;

    public function __construct($beverage)
    {
        $this->_beverage = $beverage;
        $this->Description = $this->_beverage->GetDescription() . " +Chocolate";
    }

    public function GetCost() {
        return $this->_beverage->GetCost() + 70;
    }
}