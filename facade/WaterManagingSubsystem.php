<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 11:42 PM
 */

namespace FacadeSample\WashingMachine;

class WaterManagingSubsystem {
    public function FillWater($litres) {
        echo "Fill with $litres of water".NEWLINE;
    }

    public function EmptyWater() {
        echo "Empty water tank".NEWLINE;
    }
}