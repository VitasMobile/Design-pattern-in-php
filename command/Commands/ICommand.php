<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 8:34 PM
 */
namespace CommandSample\Commands;

interface ICommand {
    public function Execute();
    public function Undo();
}