<?php
namespace Prototype;

use Prototype\Shape\Cricle;
use Prototype\Shape\Squrae;
use Prototype\Shape\Renctangle;

class ShapeCache
{

    private $cache = [];

    /**
     * 获取克隆原型对象
     *
     * @param unknown $id            
     * @return mixed|NULL
     */
    public function getShape($id)
    {
        if (isset($this->cache[$id])) {
            return clone $this->cache[$id];
        }
        return null;
    }

    public function getCahce()
    {
        return $this->cache;
    }

    /**
     * 加载原型对象
     */
    public function loadCache()
    {
        $cricle = new Cricle();
        $cricle->setId('cricle');
        $this->cache[$cricle->getId()] = $cricle;
        
        $rectangle = new Renctangle();
        $rectangle->setId('renctangle');
        $this->cache[$rectangle->getId()] = $rectangle;
        
        $squrae = new Squrae();
        $squrae->setId('squrae');
        $this->cache[$squrae->getId()] = $squrae;
    }
}