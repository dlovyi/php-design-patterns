<?php
namespace ServiceLocator\Cache;

use ServiceLocator\Interfaces\Service;

class Cache
{

    private $serviceList = [];

    public function getService($serviceName)
    {
        $serviceName = strtoupper($serviceName);
        if (isset($this->serviceList[$serviceName])) {
            var_dump("Get From Cache");
            return $this->serviceList[$serviceName];
        }
        return null;
    }

    public function addService(Service $service)
    {
        $name = strtoupper(get_class($service));
        $tmp = explode('\\', $name);
        $baseName = array_pop($tmp);
        if (! isset($this->serviceList[$baseName])) {
            $this->serviceList[$baseName] = $service;
        }
    }
}