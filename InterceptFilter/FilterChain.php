<?php
namespace InterceptFilter;

use InterceptFilter\Interfaces\Filter;

class FilterChain
{

    protected $filter = [];

    protected $target;

    /**
     * 新增拦截过滤器
     *
     * @param Filter $filter            
     */
    public function addFilter(Filter $filter)
    {
        $this->filter[] = $filter;
    }

    /**
     * 设置目标对象
     * 
     * @param Target $target            
     */
    public function setTarget(Target $target)
    {
        $this->target = $target;
    }

    /**
     * 执行拦截过滤器器
     *
     * @param unknown $request            
     * @return boolean
     */
    public function execute($request)
    {
        if (! empty($this->filter)) {
            foreach ($this->filter as $k => $flt) {
                $res = $flt->execute($request);
                if (! $res) {
                    return false;
                }
            }
        }
        $this->target->execute($request);
        return true;
    }
}