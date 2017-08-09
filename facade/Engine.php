<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 11:39 PM
 */

namespace FacadeSample\WashingMachine;

class Engine {
    public function Rotate() {
        echo "Start rotating".NEWLINE;
    }

    public function Stop() {
        echo "Stop rotating".NEWLINE;
    }
}