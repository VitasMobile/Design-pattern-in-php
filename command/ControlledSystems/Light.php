<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 10:03 PM
 */

namespace CommandSample\ControlledSystems;


class Light {
    public $State = 0;

    public function ToggleLight() {
        $this->State++;
        if ($this->State > 3)
            $this->State = 0;

        $this->PrintLight();
    }

    public function TurnOff() {
        $this->State = $this->LightsState->Off;
        $this->PrintLight();
    }

    public function SetState($state) {
        $this->State = $state;
        $this->PrintLight();
    }

    private function PrintLight() {
        echo $this->GetState().NEWLINE;
    }

    public function GetState() {
        switch ($this->State) {
            case 0:
                return "Свет выключен";
                break;

            case 1:
                return "Свет тусклый";
                break;

            case 2:
                return "Свет средний";
                break;

            case 3:
                return "Свет яркий";
                break;
        }
    }
}
