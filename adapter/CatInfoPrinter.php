<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:25 PM
 */

namespace AdapterSample\Helper;

function PrintCatInfo($cat) {
    echo "<strong>Кошачье досье:</strong>".NEWLINE;
    echo "Имя кота: ".$cat->GetName().NEWLINE;
    echo "Вид мяуканья: ".$cat->Meow().NEWLINE;
    echo "Вид царапанья: ".$cat->Scratch().NEWLINE;
    echo NEWLINE;
}