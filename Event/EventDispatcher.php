<?php
namespace Event;

use Event\Interfaces\EventDispatcherInterface;

class EventDispatcher implements EventDispatcherInterface
{

    private $listenProvider;

    public function __construct()
    {
        $this->listenProvider = new ListenerProvider();
    }

    public function dispatch($event)
    {
        $this->listenProvider->getListenersForEvent($event);
    }
}