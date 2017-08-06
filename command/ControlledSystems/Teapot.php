<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 10:03 PM
 */

namespace CommandSample\ControlledSystems;


class Teapot {
    public $State = false;

    public function TurnOn() {
        $this->State = true;
        echo $this->GetStatus().NEWLINE;
    }

    public function TurnOff() {
        $this->State = false;
        echo $this->GetStatus().NEWLINE;
    }

    public function GetStatus() {
        return $this->State ? "Чайник включен" : "Чайник выключен";
    }
}
