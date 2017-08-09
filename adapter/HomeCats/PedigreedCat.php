<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:32 PM
 */

namespace AdapterSample\HomeCats;

require_once ('IHomeCat.php');

class PedigreedCat implements  IHomeCat {

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
        return "Урррр уррррр";
    }

    function Scratch()
    {
        return "Я не царапаюсь";
    }
}