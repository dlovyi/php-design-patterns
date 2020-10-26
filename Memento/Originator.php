<?php
namespace Memento;

use Memento\Memento;

class Originator
{

    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    /**
     * 保存状态
     * @return \Memento\Memento  */
    public function saveStateToMemento()
    {
        return new Memento($this->state);
    }

    /**
     * 恢复状态
     * @param Memento $memento  */
    public function getStateFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}