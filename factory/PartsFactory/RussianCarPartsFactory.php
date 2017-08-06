<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:20 PM
 */

namespace FactorySample\PartsFactory;

require_once ("Parts/GasolineEngine.php");
require_once ("Parts/BlackPaint.php");
require_once ("Parts/MediumWheels.php");

use FactorySample\Parts\BlackPaint;
use FactorySample\Parts\GasolineEngine;
use FactorySample\Parts\MediumWheels;

class RussianCarPartsFactory extends  CarPartsFactory {

    public function CreateEngine()
    {
        return new GasolineEngine();
    }

    public function CreatePaint()
    {
        return new BlackPaint();
    }

    public function CreateWheels()
    {
        return new MediumWheels();
    }
}