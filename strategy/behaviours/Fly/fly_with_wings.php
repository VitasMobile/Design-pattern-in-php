<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 6:37 PM
 */

namespace StrategySimple\FlyBehaviours;


class FlyWithFlings implements IFlyable
{
    public function Fly() {
        echo "I'm flying with my wings<br/>";
    }
}