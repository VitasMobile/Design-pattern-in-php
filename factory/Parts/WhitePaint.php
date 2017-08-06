<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 12:59 PM
 */

namespace FactorySample\Parts;

require_once ("Paint.php");

class WhitePaint extends  Paint {
    public function __construct()
    {
        $this->color = "Paint is White";
    }
}