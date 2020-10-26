<?php
namespace InterceptFilter\Filter;

use InterceptFilter\Interfaces\Filter;

class DebugFilter implements Filter
{
    
    public function execute($request)
    {
       var_dump("DebugFilter request: " .$request);
       return true;
    }
}