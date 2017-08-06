<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:20 PM
 */

namespace FactorySample\PartsFactory;

require_once ("CarPartsFactory.php");
require_once ("Parts/DieselEngine.php");
require_once ("Parts/WhitePaint.php");
require_once ("Parts/BigWheels.php");

use FactorySample\Parts\BigWheels;
use FactorySample\Parts\DieselEngine;
use FactorySample\Parts\WhitePaint;

class DeutschCarPartsFactory extends  CarPartsFactory {

    public function CreateEngine()
    {
        return new DieselEngine();
    }

    public function CreatePaint()
    {
        return new WhitePaint();
    }

    public function CreateWheels()
    {
        return new BigWheels();
    }
}