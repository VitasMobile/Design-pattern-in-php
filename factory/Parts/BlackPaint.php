<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:00 PM
 */

namespace FactorySample\Parts;

class BlackPaint extends  Paint {
    public function __construct()
    {
        $this->color = "Paint is Black";
    }
}