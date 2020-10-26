<?php
namespace InterceptFilter;

use InterceptFilter\Interfaces\Filter;

class FilterManager
{

    protected $filter;

    public function __construct(Target $target)
    {
        $this->filter = new FilterChain();
        $this->filter->setTarget($target);
    }

    /**
     * 设置拦截过滤器
     *
     * @param Filter $filter            
     */
    public function setFilter(Filter $filter)
    {
        $this->filter->addFilter($filter);
    }

    /**
     * 过滤请求
     *
     * @param unknown $request            
     * @return boolean
     */
    public function filterRequest($request)
    {
        $this->filter->execute($request);
    }
}