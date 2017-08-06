<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 10:30 PM
 */

namespace CommandSample\Commands;

require_once ("ICommand.php");

class TeapotCommand implements ICommand {

    private $_teapot;

    public function __construct($teapot)
    {
        $this->_teapot = $teapot;
    }

    public function Execute()
    {
        $this->_teapot->TurnOn();
    }

    public function Undo()
    {
        $this->_teapot->TurnOff();
    }

    public function Draw() {
        return "Включить чайник";
    }
}