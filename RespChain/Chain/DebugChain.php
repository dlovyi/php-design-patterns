<?php
namespace RespChain\Chain;

class DebugChain extends AbstractChain
{
    public function __construct($level)
    {
        $this->level = $level;
    }
    
    public function wirte($msg)
    {
        echo "DEBUG:$msg <br/>";
    }
}