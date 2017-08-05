<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 6:37 PM
 */

namespace StrategySimple\QuackBehaviours;


class NoQuack implements IQuackable
{
    public function Quack() {
    }
}