<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 12:46 PM
 */

define ("NEWLINE", "<br />");

echo "Design pattern Factory".NEWLINE;

require_once ("Facilities/DeutschVolkswagenFacility.php");
require_once ("Facilities/RussianVolkswagenFacility.php");

use FactorySample\Facilities;

echo "Cars for Deutsch:<br/>";
$facility = new  FactorySample\Facilities\DeutschVolkswagenFacility();
$facility->GetCar("Golf");
$facility->GetCar("Passat");
$facility->GetCar("Tiguan");
$facility->GetCar("Touareg");

echo "<br/>";

echo "Cars for Russian:<br/>";
$facility = new  FactorySample\Facilities\RussianVolkswagenFacility();
$facility->GetCar("Golf");
$facility->GetCar("Passat");
$facility->GetCar("Tiguan");
$facility->GetCar("Touareg");