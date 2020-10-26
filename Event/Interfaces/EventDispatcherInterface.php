<?php
namespace Event\Interfaces;

interface EventDispatcherInterface
{
    public function dispatch($event);
}