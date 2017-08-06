<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:12 PM
 */

namespace FactorySample\Cars;

class Touareg extends  Car
{
    public function __construct($factory)
    {
        $this->Name = "Touareg";
        $this->Body = "Big Crossover";
        
        $this->_factory = $factory;
    }
}
