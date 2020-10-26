<?php
namespace ServiceLocator\Service;

use ServiceLocator\Interfaces\Service;

class Service2 implements Service
{
    
    public function getName()
    {
        return "Service2";
    }
    
    public function execute()
    {
        var_dump("execute Service2");
        return "execute Service2";
    }
}