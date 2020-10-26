<?php

class Dispacher
{

    public $data = [];

    public $url = null;

    public function __construct()
    {
        $this->url = isset($_REQUEST['url'])?$_REQUEST['url']:'index/index';
    }

    public function run()
    {
        $requestUrl = explode('/', $this->url);
        $controler = isset($requestUrl[0]) ? $requestUrl[0] : 'index';
        $action = isset($requestUrl[1]) ? $requestUrl[1] : 'index';
        
        $class = "run\\" . $controler;
        if (! class_exists($class)) {
            throw new Exception($class . ' Not Found.');
        }
        
        $reflection = new ReflectionClass($class);
        try {
            $methods = $reflection->getMethod($action);
            if (! $methods->isPublic()) {
                throw new Exception($class . ':' . $action . ' Not Found.');
            }
        } catch (Exception $e) {
            throw new Exception($class . ':' . $action . ' Not Found.');
        }
        $obj = new $class();
        $obj->{$action}();
    }
}