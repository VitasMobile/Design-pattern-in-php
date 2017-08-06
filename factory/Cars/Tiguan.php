<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:12 PM
 */

namespace FactorySample\Cars;

class Tiguan extends  Car
{
    public function __construct($factory)
    {
        $this->Name = "Tiguan";
        $this->Body = "Crossover";
        
        $this->_factory = $factory;
    }
}
