<?php
namespace InterceptFilter;

class Client
{

    protected $filterManager;

    public function setFilterManager(FilterManager $filterManager)
    {
        $this->filterManager = $filterManager;
    }

    public function sendRequest($request)
    {
        $this->filterManager->filterRequest($request);
    }
}