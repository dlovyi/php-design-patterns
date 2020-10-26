<?php
namespace Event\Interfaces;

interface ListenerProviderInterface
{
    public function getListenersForEvent($event);
}
