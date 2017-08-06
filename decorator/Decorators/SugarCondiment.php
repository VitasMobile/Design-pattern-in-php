<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:32 AM
 */
namespace DecoratorSample\Decorators;

require_once ("CondimentsDecoratorBase.php");

class SugarCondiment extends CondimentsDecoratorBase {
    private $_beverage;

    public function __construct($beverage)
    {
        $this->_beverage = $beverage;
        $this->Description = $this->_beverage->GetDescription() . " +Sugar";
    }

    public function GetCost() {
        return $this->_beverage->GetCost() + 10;
    }
}