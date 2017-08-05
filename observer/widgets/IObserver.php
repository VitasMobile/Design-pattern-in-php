<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 9:14 PM
 */

namespace ObserverSample\Widgets;


interface IObserver
{
    public function Update($twiter, $lenta, $tv);
    public function RemoveFromSubject();
}