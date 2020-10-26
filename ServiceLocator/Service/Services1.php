<?php
namespace ServiceLocator\Service;

use ServiceLocator\Interfaces\Service;

class Services1 implements Service
{

    public function getName()
    {
        return "Service1";
    }

    public function execute()
    {
        var_dump("execute Service1");
        return "execute Service1";
    }
}