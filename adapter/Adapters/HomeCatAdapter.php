<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 11:00 PM
 */

namespace AdapterSample\Adapters;

use AdapterSample\HomeCats\IHomeCat;

class HomeCatAdapter implements IHomeCat {

    private $_wildCat;

    public function __construct($wildCat)
    {
        $this->_wildCat = $wildCat;
    }

    public function SetName($name)
    {
    }

    public function GetName()
    {
        return $this->_wildCat->GetBreed();
    }

    function Meow()
    {
        return $this->_wildCat->Growl();
    }

    function Scratch()
    {
        return $this->_wildCat->Scratch();
    }
}