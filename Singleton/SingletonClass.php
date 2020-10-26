<?php
namespace Singleton;

class SingletonClass
{

    public static $instance = null;

    private $count = 0;

    private $num = 0;

    private function __construct()
    {}

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
            self::$instance->count ++;
        }
        return self::$instance;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function incrNum()
    {
        $this->num ++;
    }

    public function getNum()
    {
        return $this->num;
    }
}