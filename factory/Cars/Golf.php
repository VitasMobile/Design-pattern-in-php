<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:12 PM
 */

namespace FactorySample\Cars;

require_once ("Car.php");

class Golf extends  Car
{
    public function __construct($factory)
    {
        $this->Name = "Golf";
        $this->Body = "Hatchback";

        $this->_factory = $factory;
    }
}
