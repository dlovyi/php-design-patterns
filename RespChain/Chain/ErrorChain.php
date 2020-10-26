<?php
namespace RespChain\Chain;

class ErrorChain extends AbstractChain
{
    public function __construct($level)
    {
        $this->level = $level;
    }

    public function wirte($msg)
    {
        echo "ERROR:$msg <br/>";
    }
}