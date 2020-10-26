<?php
namespace Nulls\Customer;

class NullCustomer
{
    public function isNull()
    {
        return true;
    }

    public function getName()
    {
        return "Not Available in Customer Database";
    }
}