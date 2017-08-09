<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 11:36 PM
 */

namespace FacadeSample;

define('NEWLINE', '<br />');

require_once ('WaterManagingSubsystem.php');
require_once ('Thermo.php');
require_once ('Engine.php');
require_once ('Dryer.php');
require_once ('WashingMachine.php');

use FacadeSample\WashingMachine;

$water = new WashingMachine\WaterManagingSubsystem();
$thermo = new WashingMachine\Thermo();
$engine = new WashingMachine\Engine();
$dryer = new WashingMachine\Dryer();

$washingMachine = new WashingMachine\WashingMachine($dryer, $engine, $thermo, $water);

// Cotton
echo "COTTON".NEWLINE;
$washingMachine->WashCotton();

echo NEWLINE;

// Wool
echo "WOOL".NEWLINE;
$washingMachine->WashWool();

