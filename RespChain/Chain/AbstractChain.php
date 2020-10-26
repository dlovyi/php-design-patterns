<?php
namespace RespChain\Chain;

abstract class AbstractChain
{

    public const INFO = 1;

    public const DEBUG = 2;

    public const ERROR = 3;

    protected $level;

    protected $nextChain;

    public function setNextChain(AbstractChain $chain)
    {
        $this->nextChain = $chain;
    }

    /**
     * 责任链传递，满足条件处理不满足条件传递给下一个
     * @param unknown $level
     * @param string $msg  */
    public function logMessage($level = AbstractChain::INFO, $msg = '')
    {
        if ($this->level <= $level) {
            $this->wirte($msg);
        }
        
        if (! empty($this->level) && ($this->nextChain != null)) {
            $this->nextChain->logMessage($level, $msg);
        }
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getNext()
    {
        return $this->nextChain;
    }

    abstract public function wirte($msg);
}