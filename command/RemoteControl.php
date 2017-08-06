<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 9:28 PM
 */
namespace CommandSample;

class RemoteControl {
    private $_commands = [];

    public function PushButton($buttonId) {
        if (array_key_exists($buttonId, $this->_commands)) {
            $this->_commands[$buttonId]->Execute();
        }
    }

    public function UndoButton($buttonId) {
        if (array_key_exists($buttonId, $this->_commands)) {
            $this->_commands[$buttonId]->Undo();
        }
    }

    public function SetCommandForButton($buttonId, $cmd) {
        $this->_commands[$buttonId] = $cmd;
    }

    public function Draw() {
        foreach ($this->_commands as $key => $value) {
            echo "$key \t- ".$value->Draw().NEWLINE;
        }
    }
}