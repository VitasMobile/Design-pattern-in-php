<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 10:30 PM
 */

namespace CommandSample\Commands;

require_once ("ICommand.php");

class TvCommand implements ICommand {

    private $_tv;

    public function __construct($tv)
    {
        $this->_tv = $tv;
    }

    public function Execute()
    {
        $this->_tv->TurnOn();
    }

    public function Undo()
    {
        $this->_tv->TurnOff();
    }

    public function Draw() {
        return "Включить телевизор";
    }
}