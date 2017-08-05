<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 9:17 PM
 */

namespace ObserverSample\Widgets;


class TvObserver implements IObserver, IWidget
{
    private $_tv;
    private $_subject;

    function __construct($subject) {
        $this->_subject = $subject;
        $this->_subject->RegisterObserver($this);
    }

    public function Update($twitter, $lenta, $tv) {
        $this->_tv = $tv;
        $this->Display();
    }

    public function Display() {
        echo "Tv: ".$this->_tv."<br/>";
    }

    public function RemoveFromSubject()
    {
        $this->_subject.$this->RemoveFromSubject($this);
    }
}