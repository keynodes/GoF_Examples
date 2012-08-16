<?php

namespace DesignPatterns\GoF\Builder;

require_once "Building.php";
require_once "BuilderInterface.php";

/**
 * JapaneseHouseBuilder
 *
 * @uses BuilderInterface
 * @version $id$
 * @author keynodes <keynodes@gmail.com>
 */
class JapaneseHouseBuilder implements BuilderInterface
{
    /**
     * building
     *
     * @var mixed
     * @access private
     */
    private $building = null;

    /**
     * __construct
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->building = new \DesignPatterns\GoF\Builder\Building();
    }

    /**
     * buildBase
     *
     * @access public
     * @return void
     */
    public function buildBase()
    {
        $this->building->setBase("CONCRETE");
    }

    /**
     * buildFrame
     *
     * @access public
     * @return void
     */
    public function buildFrame()
    {
        $this->building->setFrame("WOOD");
    }

    /**
     * buildWall
     *
     * @access public
     * @return void
     */
    public function buildWall()
    {
        $this->building->setWall("CLAY");
    }

    /**
     * getResult
     *
     * @access public
     * @return Building
     */
    public function getResult()
    {

        return $this->building;
    }
}

