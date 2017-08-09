<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:53 PM
 */

namespace AdapterSample\WildCats;

require_once ('IWildCats.php');

class Tiger implements IWildCat {

    public function GetBreed()
    {
        return "Tiger";
    }

    function Growl()
    {
        return "Grrrrrr";
    }

    function Scratch()
    {
        return "У меня очень острые когти, царапаюсь до смерти";
    }
}