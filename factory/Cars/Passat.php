<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:12 PM
 */

namespace FactorySample\Cars;

class Passat extends  Car
{
    public function __construct($factory)
    {
        $this->Name = "Passat";
        $this->Body = "Sedan";
        
        $this->_factory = $factory;
    }
}
