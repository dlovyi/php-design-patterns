<?php
namespace RespChain\Chain;

class InfoChain extends AbstractChain
{

    public function __construct($level)
    {
        $this->level = $level;
    }

    public function wirte($msg)
    {
        echo "INFO:$msg <br/>";
    }
    
}