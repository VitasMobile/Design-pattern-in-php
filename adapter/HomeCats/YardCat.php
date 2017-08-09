<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:36 PM
 */

namespace AdapterSample\HomeCats;

require_once ('IHomeCat.php');

class YardCat implements IHomeCat {

    private $name;
    public function SetName($name)
    {
        $this->name = $name;
    }

    public function GetName()
    {
        return $this->name;
    }

    function Meow()
    {
        return "Мяу Мяу!";
    }

    function Scratch()
    {
        return "Я царапаюсь, но не сильно";
    }
}