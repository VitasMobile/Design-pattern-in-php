<?php
/**
 * Created by PhpStorm.
 * User: Vitas
 * Date: 7/31/2017
 * Time: 2:30 AM
 */

require_once ("news/news_aggregator.php");

require_once ("widgets/IObserver.php");
require_once ("widgets/IWidget.php");
require_once ("widgets/lenta_widget.php");
require_once ("widgets/tv_widget.php");
require_once ("widgets/twitter_widget.php");

$newAggregator = new \ObserverSample\News\NewsAggregator();

new \ObserverSample\Widgets\LentaObserver($newAggregator);
new \ObserverSample\Widgets\TvObserver($newAggregator);
$twitterWidget = new \ObserverSample\Widgets\TwitterObserver($newAggregator);

$newAggregator->NewNewsAvailable();
echo "<br/>";
$newAggregator->RemoveObserver( $twitterWidget );
$newAggregator->NewNewsAvailable();