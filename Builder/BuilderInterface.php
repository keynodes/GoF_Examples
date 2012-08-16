<?php

namespace DesignPatterns\GoF\Builder;

/**
 * BuilderInterface
 *
 * @author keynodes <keynodes@gmail.com>
 */
interface BuilderInterface
{
    /**
     * buildBase
     *
     * @access public
     * @return void
     */
    public function buildBase();

    /**
     * buildFrame
     *
     * @access public
     * @return void
     */
    public function buildFrame();

    /**
     * buildWall
     *
     * @access public
     * @return void
     */
    public function buildWall();

    /**
     * getResult
     *
     * @access public
     * @return void
     */
    public function getResult();
}
