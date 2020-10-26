<?php
namespace Event\Interfaces;

interface StoppableEventInterface
{
    public function isPropagationStopped();
}
