<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/30/2017
 * Time: 9:17 PM
 */

namespace ObserverSample\Widgets;


class TwitterObserver implements IObserver, IWidget
{
    private $_twitter;
    private $_subject;

    function __construct($subject) {
        $this->_subject = $subject;
        $this->_subject->RegisterObserver($this);
    }

    public function Update($twitter, $lenta, $tv) {
        $this->_twitter = $twitter;
        $this->Display();
    }

    public function Display() {
        echo "Twitter: ".$this->_twitter."<br/>";
    }

    public function RemoveFromSubject()
    {
        $this->_subject.$this->RemoveFromSubject($this);
    }
}