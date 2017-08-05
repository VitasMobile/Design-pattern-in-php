<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/31/2017
 * Time: 2:19 AM
 */

namespace ObserverSample\News;

require_once ("/ISubject.php");

use ObserverSample\News\ISubject;

class NewsAggregator implements ISubject
{
    private $_observers = array();

    public function RegisterObserver($observer) {
        array_push($this->_observers, $observer);
    }
    public function RemoveObserver($observer) {
        if (($key = array_search($observer, $this->_observers)) !== false) {
            unset($this->_observers[$key]);
        }
    }
    public function NotifyObservers() {
        foreach ($this->_observers as $observer) {
            $observer->Update($this->GetTwitterNews(), $this->GetLentaNews(), $this->GetTvNews());
        }
    }

    public function GetLentaNews() {
        $news = array(
            "Новость из Lenta номер 1",
            "Новость из Lenta номер 2",
            "Новость из Lenta номер 3"
        );
        return $news[rand(0, count($news)-1)];
    }
    public function GetTvNews() {
        $news = array(
            "Новость из Tv номер 1",
            "Новость из Tv номер 2",
            "Новость из Tv номер 3"
        );
        return $news[rand(0, count($news)-1)];
    }
    public function GetTwitterNews() {
        $news = array(
            "Новость из Twitter номер 1",
            "Новость из Twitter номер 2",
            "Новость из Twitter номер 3"
        );
        return $news[rand(0, count($news)-1)];
    }


    public function NewNewsAvailable() {
        $this->NotifyObservers();
    }
}