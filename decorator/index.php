<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 3:21 AM
 */

use DecoratorSample\Beverage;
use DecoratorSample\Decorators;

define("NEWLINE", "<br/>");

require_once ("Beverage/Espresso.php");
require_once ("Beverage/BlackTea.php");
require_once ("Beverage/GreenTea.php");
require_once ("Decorators/SugarCondiment.php");
require_once ("Decorators/MilkCondiment.php");
require_once ("Decorators/ChocolateCondiment.php");

echo "Design pattern: Decorator".NEWLINE.NEWLINE;

$espresso = new Beverage\Espresso();
$blacktea = new Beverage\BlackTea();
$greentea = new Beverage\GreenTea();

printBeverage($espresso);
printBeverage($blacktea);
printBeverage($greentea);

echo '------------------------'.NEWLINE;

$capuccino = new DecoratorSample\Decorators\SugarCondiment(new Decorators\MilkCondiment(new Beverage\Espresso()));
printBeverage($capuccino);


$greenTeaWithSugar = new Decorators\SugarCondiment(new Beverage\GreenTea());
printBeverage($greenTeaWithSugar);

function printBeverage($beverage) {
    echo 'Beverage description: ';
    echo $beverage->GetDescription() . '.'.NEWLINE;
    echo 'Cost: '. $beverage->GetCost().NEWLINE;
    echo NEWLINE;
}
