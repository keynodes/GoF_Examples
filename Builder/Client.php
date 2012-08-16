<?php

require_once "Director.php";
require_once "JapaneseHouseBuilder.php";
require_once "KamakuraHouseBuilder.php";

$japaneseHouseBuilder = new \DesignPatterns\GoF\Builder\JapaneseHouseBuilder();
$kamakuraHouseBuilder = new \DesignPatterns\GoF\Builder\KamakuraHouseBuilder();
$director1            = new \DesignPatterns\GoF\Builder\Director($japaneseHouseBuilder);
$director2            = new \DesignPatterns\GoF\Builder\Director($kamakuraHouseBuilder);

$building1 = $director1->construct();
$building2 = $director2->construct();

print "=====JapaneseHouse=====\n";
print $building1->toString(); #=> [Base:CONCRETE, Frame:WOOD, Wall:CLAY]
print "\n\n";
print "=====KamakuraHouse=====\n";
print $building2->toString(); #=> [Base:SNOW, Frame:SNOW, Wall:SNOW]
print "\n\n";

