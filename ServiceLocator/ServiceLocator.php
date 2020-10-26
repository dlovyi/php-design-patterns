<?php
namespace ServiceLocator;

use ServiceLocator\Cache\Cache;

class ServiceLocator
{

    public static $cache = null;

    public static function getService($serviceName)
    {
        if (self::$cache == null) {
            self::$cache = new Cache();
        }
        
        $server = self::$cache->getService($serviceName);
        if ($server == null) {
            $init = new InitialContext();
            $server = $init->lookup($serviceName);
            if ($server != null) {
                self::$cache->addService($server);
            }
        }
        
        return $server;
    }
}