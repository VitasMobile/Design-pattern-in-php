<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 7:09 PM
 */

namespace StrategySimple\Ducks;


use StrategySimple\FlyBehaviours\NoFly;
use StrategySimple\QuackBehaviours\NoQuack;

class UpgradableDuck extends DuckBase
{
    function __construct()
    {
        $this->flyBehaviour = new NoFly();
        $this->quackBehaviour = new NoQuack();
    }

    public function Display() {
        echo "I'm a upgradable duck!<br/>";
    }
}