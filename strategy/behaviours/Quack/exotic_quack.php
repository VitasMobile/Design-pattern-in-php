<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 6:37 PM
 */

namespace StrategySimple\QuackBehaviours;


class ExoticQuack implements IQuackable
{
    public function Quack() {
        echo "Meaw! Meaw<br/>";
    }
}