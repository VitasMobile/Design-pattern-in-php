<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 11:40 PM
 */

namespace FacadeSample\WashingMachine;

class WashingMachine {
    private $_dryer;
    private $_engine;
    private $_thermo;
    private $_water;

    public function __construct($dryer, $engine, $thermo, $water)
    {
        $this->_dryer = $dryer;
        $this->_engine = $engine;
        $this->_thermo = $thermo;
        $this->_water = $water;
    }

    public function WashCotton() {
        $this->_water->FillWater(10);
        $this->_thermo->WarmUp(70);
        $this->_engine->Rotate();
        $this->_engine->Rotate();
        $this->_engine->Rotate();
        $this->_engine->Stop();
        $this->_water->EmptyWater();
        $this->_dryer->Dry(30, 1000);
        $this->_water->FillWater(15);
        $this->_thermo->WarmUp(50);
        $this->_engine->Rotate();
        $this->_engine->Rotate();
        $this->_engine->Rotate();
        $this->_engine->Stop();
        $this->_water->EmptyWater();
        $this->_dryer->Dry(60, 1500);
    }

    public function WashWool() {
        $this->_water->FillWater(7);
        $this->_thermo->WarmUp(30);
        $this->_engine->Rotate();
        $this->_engine->Stop();
        $this->_water->EmptyWater();
        $this->_dryer->Dry(20, 500);
        $this->_water->FillWater(10);
        $this->_thermo->WarmUp(20);
        $this->_engine->Rotate();
        $this->_engine->Stop();
        $this->_water->EmptyWater();
        $this->_dryer->Dry(60, 700);
    }
}