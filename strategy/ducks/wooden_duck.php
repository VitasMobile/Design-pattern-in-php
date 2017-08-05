<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 5:56 PM
 */

namespace StrategySimple\Ducks;

use StrategySimple\FlyBehaviours\NoFly;
use StrategySimple\QuackBehaviours\NoQuack;

require_once ("duck_base.php");

class WoodenDuck extends DuckBase
{
    function __construct()
    {
        $this->flyBehaviour = new NoFly();
        $this->quackBehaviour = new NoQuack();
    }

    public function Display() {
        echo "Hi! I'm a wooden duck!<br/>";
    }
}