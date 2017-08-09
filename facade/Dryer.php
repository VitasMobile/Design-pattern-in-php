<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 11:39 PM
 */

namespace FacadeSample\WashingMachine;

class Dryer {
    public function Dry($seconds, $intensity) {
        echo "Drying $seconds seconds with intensity $intensity".NEWLINE;
    }
}