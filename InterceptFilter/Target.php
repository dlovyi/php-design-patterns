<?php
namespace InterceptFilter;

class Target
{

    public function execute($request)
    {
        var_dump("Target request: " . $request);
    }
}