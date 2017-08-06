<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 8:31 PM
 */

namespace CommandSample;

define("NEWLINE", "<br/>");

require_once ("RemoteControl.php");
require_once ("Commands/LightsCommand.php");
require_once ("Commands/MusicCommand.php");
require_once ("Commands/TeapotCommand.php");
require_once ("Commands/TvCommand.php");
require_once ("Commands/MacroCommand.php");

require_once ("ControlledSystems\Light.php");
require_once ("ControlledSystems\Music.php");
require_once ("ControlledSystems\Teapot.php");
require_once ("ControlledSystems\Tv.php");

use CommandSample\Commands\LightsCommand;
use CommandSample\Commands\TvCommand;
use CommandSample\Commands\MusicCommand;
use CommandSample\Commands\TeapotCommand;
use CommandSample\Commands\MacroCommand;

use CommandSample\ControlledSystems\Light;
use CommandSample\ControlledSystems\Music;
use CommandSample\ControlledSystems\Teapot;
use CommandSample\ControlledSystems\Tv;


$remote = new \CommandSample\RemoteControl();
$userInput = "";

$remote->SetCommandForButton(1, new LightsCommand(new Light()));
$remote->SetCommandForButton(2, new TvCommand(new Tv()));
$remote->SetCommandForButton(3, new MusicCommand(new Music()));
$remote->SetCommandForButton(4, new TeapotCommand(new Teapot()));

$teapotCommand = new TeapotCommand(new Teapot());
$tvCommand = new TvCommand(new Tv());
$macroCommand = new MacroCommand(array($teapotCommand, $tvCommand));
$remote->SetCommandForButton(5, $macroCommand);

// loop
echo "<strong>На пульте есть:</strong>".NEWLINE;
echo $remote->Draw().NEWLINE;

for ($i = 1; $i < 6; $i++) {
    echo "Тестер нажал кнопку $i : ";
    $remote->PushButton($i);
}

for ($i = 1; $i < 6; $i++) {
    echo "Тестер нажал кнопку отмены для действия $i : ";
    $remote->UndoButton($i);
}

echo NEWLINE."<strong>Тестер будет тестировать многофункциональный переключатель света:</strong>".NEWLINE;
for ($i = 1; $i < 7; $i++) {
    echo "Тестер нажал кнопку 1 : ";
    $remote->PushButton(1);
}
echo NEWLINE."<strong>Тестер будет тестировать кнпоку отката для многофункциональный переключателя света:</strong>".NEWLINE;
for ($i = 1; $i < 3; $i++) {
    echo "Тестер нажал кнопку отката для кнопки 1 : ";
    $remote->PushButton(1);
}

echo "Конец!".NEWLINE;