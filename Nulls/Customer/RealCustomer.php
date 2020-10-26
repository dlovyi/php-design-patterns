<?php
namespace Nulls\Customer;

class RealCustomer
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function isNull()
    {
        return false;
    }

    public function getName()
    {
        return $this->name;
    }
}