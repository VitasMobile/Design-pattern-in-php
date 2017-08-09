<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:27 PM
 */

namespace AdapterSample\WildCats;

interface IWildCat {
    public function GetBreed();
    function Growl();
    function Scratch();
}