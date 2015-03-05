<?php

namespace TestService;

class Adder
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function add($value)
    {
        return $value+1;
    }
}
