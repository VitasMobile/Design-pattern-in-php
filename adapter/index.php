<?php
/**
* Created by PhpStorm.
 * User: Vitas
 * Date: 8/9/2017
 * Time: 10:21 PM
 */

namespace AdapterSample;

define ('NEWLINE', '<br />');

require_once ('CatInfoPrinter.php');

require_once ('HomeCats/PedigreedCat.php');
require_once ('HomeCats/YardCat.php');
require_once ('WildCats/Tiger.php');

require_once ('Adapters/HomeCatAdapter.php');

use AdapterSample\Adapters\HomeCatAdapter;
use AdapterSample\Helper;
use AdapterSample\HomeCats;
use AdapterSample\Adapters;

/*IHomeCat*/ $vaska = new HomeCats\YardCat();
$vaska->SetName("Васька");
Helper\PrintCatInfo($vaska);

/*IHomeCat*/ $wagner = new HomeCats\PedigreedCat();
$wagner->SetName("Вагнер");
Helper\PrintCatInfo($wagner);

// Use Adapter
$tiger = new WildCats\Tiger();
$adapter = new HomeCatAdapter($tiger);
Helper\PrintCatInfo($adapter);

