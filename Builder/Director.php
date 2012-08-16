<?php

namespace DesignPatterns\GoF\Builder;

/**
 * Director
 *
 * @author keynodes <keynodes@gmail.com>
 */
class Director
{
    /**
     * builder
     *
     * @var mixed
     * @access private
     */
    private $builder;

    /**
     * __construct
     *
     * @param mixed $builder
     * @access public
     * @return void
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }

    /**
     * construct
     *
     * @access public
     * @return Building
     */
    public function construct()
    {
        $this->builder->buildBase();
        $this->builder->buildFrame();
        $this->builder->buildWall();

        return $this->builder->getResult();
    }
}
