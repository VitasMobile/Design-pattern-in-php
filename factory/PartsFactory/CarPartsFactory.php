<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:09 PM
 */

namespace FactorySample\PartsFactory;

abstract class CarPartsFactory {
    public abstract function CreateEngine();
    public abstract function CreatePaint();
    public abstract function CreateWheels();
}