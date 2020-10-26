<?php
namespace InterceptFilter\Filter;

use InterceptFilter\Interfaces\Filter;

class AuthenticationFilter implements Filter
{

    public function execute($request)
    {
        var_dump("AuthenticationFilter request: " .$request);
        return true;
    }
}