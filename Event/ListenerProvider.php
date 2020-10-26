<?php
namespace Event;

use Event\Interfaces\ListenerProviderInterface;
use Event\Listener\TestListener;
use Event\Listener\Test1Listener;

class ListenerProvider implements ListenerProviderInterface
{

    /**
     * 注册监听器
     * 
     * @var array
     */
    public $listener = [
        TestListener::class,
        Test1Listener::class
    ];

    /**
     * 获取对应事件的监听器
     * 
     * {@inheritdoc}
     *
     * @see \Event\Interfaces\ListenerProviderInterface::getListenersForEvent()
     */
    public function getListenersForEvent($event)
    {
        $eventName = get_class($event);
        foreach ($this->listener as $k => $listener) {
            $listen = new $listener();
            $eventList = $listen->listen();
            var_dump($eventList);
            if (in_array($eventName, $eventList)) {
                $listen->process($event);
                
                if (! $event->isPropagationStopped()) {
                    break;
                }
            }
        }
    }
}