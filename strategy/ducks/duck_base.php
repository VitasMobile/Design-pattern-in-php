<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 5:44 PM
 */

namespace StrategySimple\Ducks;

use StrategySimple\FlyBehaviours\FlyWithFlings;
use StrategySimple\QuackBehaviours\IQuackable;
use StrategySimple\QuackBehaviours\SimpleQuack;

require_once ("./behaviours/Fly/IFlyable.php");
require_once ("./behaviours/Quack/IQuackable.php");
require_once ("./behaviours/Fly/fly_with_wings.php");
require_once ("./behaviours/Fly/no_fly.php");
require_once ("./behaviours/Quack/simple_quack.php");
require_once ("./behaviours/Quack/no_quack.php");
require_once ("./behaviours/Quack/exotic_quack.php");

abstract class DuckBase
{
    protected $flyBehaviour;
    protected $quackBehaviour;

    function __construct()
    {
        $this->flyBehaviour = new FlyWithFlings();
        $this->quackBehaviour = new SimpleQuack();
    }

    public function SetQuackBehaviour($newQuackBehaviour) {
        $this->quackBehaviour = $newQuackBehaviour;
    }
    public function SetFlyBehaviour($newFlyBehaviour) {
        $this->flyBehaviour = $newFlyBehaviour;
    }

    public function Quack() {
        $this->quackBehaviour->Quack();
    }
    public function Swim() {
        echo "I'm swimming<br/>";
    }
    public function Fly() {
        $this->flyBehaviour->Fly();
    }
    public abstract function Display();
}