<?php

function lib_autoload($class)
{
    $path = __DIR__ . '/' . $class . '.php';
    
    $path = str_replace('\\', '/', $path);
    if (file_exists($path)) {
        require_once $path;
    } else {
        throw new Exception('File:' . $path . ' Not Found');
    }
}

spl_autoload_register('lib_autoload');