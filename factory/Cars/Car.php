<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/6/2017
 * Time: 1:05 PM
 */

namespace FactorySample\Cars;

abstract class Car {
    protected $_factory;

    protected $Name = "";
    protected $Body = "Caravan";

    protected $Engine;
    protected $PaintColor;
    protected $Wheels;

    public function Configure()
    {
        echo "Configuring: $this->Name<br/>";
        echo "Body is: $this->Body<br/>";

        $this->Engine = $this->_factory->CreateEngine();
        $this->PaintColor = $this->_factory->CreatePaint();
        $this->Wheels = $this->_factory->CreateWheels();

        $this->Engine->Show();
        $this->PaintColor->Show();
        $this->Wheels->Show();

        echo "<br/>";
    }
}