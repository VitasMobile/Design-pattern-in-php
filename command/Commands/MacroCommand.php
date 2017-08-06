<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 9:28 PM
 */

namespace CommandSample\Commands;

require_once ("ICommand.php");

class MacroCommand implements ICommand {

    private $_innerCommands = [];

    public function __construct($commands)
    {
        $this->_innerCommands = $commands;
    }

    function Execute()
    {
        foreach ($this->_innerCommands as $innerCommand) {
            $innerCommand->Execute();
        }
    }

    function Undo()
    {
        foreach ($this->_innerCommands as $innerCommand) {
            $innerCommand->Undo();
        }
    }

    public function Draw() {
        $commandArr = [];
        foreach ($this->_innerCommands as $innerCommand) {
            $commandArr[] = $innerCommand->Draw();
        }
        return "MacroCommand: ".implode(', ', $commandArr);
    }
}