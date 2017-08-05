<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 9:17 PM
 */

namespace ObserverSample\Widgets;


class LentaObserver implements IObserver, IWidget
{
    private $_lenta;
    private $_subject;

    function __construct($subject) {
        $this->_subject = $subject;
        $this->_subject->RegisterObserver($this);
    }

    public function Update($twitter, $lenta, $tv) {
        $this->_lenta = $lenta;
        $this->Display();
    }

    public function Display() {
        echo "Lenta: ".$this->_lenta."<br/>";
    }


    public function RemoveFromSubject()
    {
        $this->_subject.$this->RemoveFromSubject($this);
    }
}