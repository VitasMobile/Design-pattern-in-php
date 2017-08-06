<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 9:58 PM
 */

namespace CommandSample\Commands;

require_once ("ICommand.php");

class LightsCommand implements ICommand {

    private $_light;
    private $_states = [];

    public function __construct($light)
    {
        $this->_light = $light;
    }

    public function Execute()
    {
        array_push($this->_states, $this->_light->State);
        $this->_light->ToggleLight();
    }

    public function Undo()
    {
        $prevState = array_pop($this->_states);
        $this->_light->SetState($prevState);
    }

    public function Draw() {
        return "Регулирование уровня света";
    }
}