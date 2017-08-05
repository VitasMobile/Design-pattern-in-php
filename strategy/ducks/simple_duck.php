<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 5:56 PM
 */

namespace StrategySimple\Ducks;

require_once ("duck_base.php");

class SimpleDuck extends DuckBase
{
    public function Display() {
        echo "Hi! I'm a simple duck!<br/>";
    }
}