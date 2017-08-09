<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:27 PM
 */

namespace AdapterSample\HomeCats;

interface IHomeCat {
    public function SetName($name);
    public function GetName();
    function Meow();
    function Scratch();
}