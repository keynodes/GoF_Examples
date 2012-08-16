<?php

namespace DesignPatterns\GoF\Builder;

/**
 * Building
 *
 * @author keynodes <keynodes@gmail.com>
 */
class Building
{
    /**
     * base
     *
     * @var mixed
     * @access private
     */
    private $base;

    /**
     * frame
     *
     * @var mixed
     * @access private
     */
    private $frame;

    /**
     * wall
     *
     * @var mixed
     * @access private
     */
    private $wall;

    /**
     * setBase
     *
     * @param mixed $material
     * @access public
     * @return void
     */
    public function setBase($material)
    {
        $this->base = $material;
    }

    /**
     * setFrame
     *
     * @param mixed $material
     * @access public
     * @return void
     */
    public function setFrame($material)
    {
        $this->frame = $material;
    }

    /**
     * setWall
     *
     * @param mixed $material
     * @access public
     * @return void
     */
    public function setWall($material)
    {
        $this->wall = $material;
    }

    /**
     * toString
     *
     * @access public
     * @return string
     */
    public function toString()
    {

        return sprintf("[Base:%s, Frame:%s, Wall:%s]", $this->base, $this->frame, $this->wall);
    }
}

