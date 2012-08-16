<?php

namespace DesignPatterns\GoF\Builder;

require_once "Building.php";
require_once "BuilderInterface.php";

class KamakuraHouseBuilder implements BuilderInterface
{
    private $building = null;


    public function __construct()
    {
        $this->building = new \DesignPatterns\GoF\Builder\Building();
    }


    public function buildBase()
    {
        $this->building->setBase("SNOW");
    }

    public function buildFrame()
    {
        $this->building->setFrame("SNOW");
    }

    public function buildWall()
    {
        $this->building->setWall("SNOW");
    }

    public function getResult()
    {
        return $this->building;
    }
}

