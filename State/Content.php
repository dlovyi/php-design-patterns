<?php
namespace State;

use State\Interfaces\State;

class Content
{

    private $state;

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        echo $this->state;
        return $this->state;
    }
}