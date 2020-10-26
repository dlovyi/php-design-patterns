<?php
namespace Nulls\Customer;

abstract class AbstractCustomer
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function isNull();

    abstract public function getName();
}