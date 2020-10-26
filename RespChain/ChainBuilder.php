<?php
namespace RespChain;

use RespChain\Chain\InfoChain;
use RespChain\Chain\AbstractChain;
use RespChain\Chain\DebugChain;
use RespChain\Chain\ErrorChain;

class ChainBuilder
{

    public static function getChain()
    {
        $info = new InfoChain(AbstractChain::INFO);
        $debug = new DebugChain(AbstractChain::DEBUG);
        $error = new ErrorChain(AbstractChain::ERROR);
        
        // var_dump($info->getLevel());
        // var_dump($debug->getLevel());
        // var_dump($error->getLevel());
        
        $info->setNextChain($debug);
        $debug->setNextChain($error);
        
        // var_dump($info->getNext());
        // var_dump($debug->getNext());
        // var_dump($error->getNext());
        
        return $info;
    }
}