<?php
namespace Event\Interfaces;

interface Listener
{

    public function listen(): array;

    public function process($event);
}
