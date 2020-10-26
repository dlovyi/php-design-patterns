<?php
namespace ServiceLocator;

use ServiceLocator\Service\Services1;
use ServiceLocator\Service\Service2;

class InitialContext
{

    /**
     * 查找对应服务
     * 
     * @param unknown $serviceName            
     * @return \ServiceLocator\Service\Service1|\ServiceLocator\Service\Service2|NULL
     */
    public function lookup($serviceName)
    {
        $serviceName = strtoupper($serviceName);
        
        if ($serviceName == "SERVICES1") {
            var_dump("Looking up and creating a new Services1 object");
            return new Services1();
        } else if ($serviceName == "SERVICE2") {
            var_dump("Looking up and creating a new Service2 object");
            return new Service2();
        }
        return null;
    }
}