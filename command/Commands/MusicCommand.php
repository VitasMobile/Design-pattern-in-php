<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 10:30 PM
 */

namespace CommandSample\Commands;

require_once ("ICommand.php");

class MusicCommand implements ICommand {

    private $_music;

    public function __construct($music)
    {
        $this->_music = $music;
    }

    public function Execute()
    {
        $this->_music->TurnOn();
    }

    public function Undo()
    {
        $this->_music->TurnOff();
    }

    public function Draw() {
        return "Включить музыку";
    }
}