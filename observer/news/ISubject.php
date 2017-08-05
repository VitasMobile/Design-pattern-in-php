<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/31/2017
 * Time: 2:17 AM
 */

namespace ObserverSample\News;


interface ISubject
{
    function RegisterObserver($observer);
    function RemoveObserver($observer);
    function NotifyObservers();
}