<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 5:43 PM
 */

namespace StrategySimple;

use StrategySimple\Ducks\DuckBase;
use StrategySimple\Ducks\UpgradableDuck;
use StrategySimple\FlyBehaviours\FlyWithFlings;
use StrategySimple\QuackBehaviours\ExoticQuack;

require_once ("ducks/exotic_duck.php");
require_once ("ducks/simple_duck.php");
require_once ("ducks/wooden_duck.php");
require_once ("ducks/rubber_duck.php");
require_once ("ducks/upgradable_duck.php");


$ducks = array(
    new Ducks\ExoticDuck(),
    new Ducks\SimpleDuck(),
    new Ducks\WoodenDuck(),
    new Ducks\RubberDuck()
);

foreach ($ducks as $duck) {
    $duck->Display();
    $duck->Swim();
    $duck->Quack();
    $duck->Fly();
    echo "<br/>";
}

$upgradableDuck = new UpgradableDuck();
$upgradableDuck->Display();
$upgradableDuck->Swim();
$upgradableDuck->Quack();
$upgradableDuck->Fly();

$upgradableDuck->SetFlyBehaviour(new FlyWithFlings());
$upgradableDuck->SetQuackBehaviour(new ExoticQuack());

echo "After Update<br/>";
$upgradableDuck->Quack();
$upgradableDuck->Fly();