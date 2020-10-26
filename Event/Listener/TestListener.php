<?php
namespace Event\Listener;

use Event\Interfaces\Listener;
use Event\Event\TestEvent;
use Event\Event\Test1Event;

class TestListener implements Listener
{

    /**
     * 监听事件注册
     * 
     * {@inheritdoc}
     *
     * @see \Event\Interfaces\Listener::listen()
     */
    public function listen(): array
    {
        return [
            TestEvent::class,
            Test1Event::class
        ];
    }

    /**
     * 触发事件后执行操作
     * 
     * {@inheritdoc}
     *
     * @see \Event\Interfaces\Listener::process()
     */
    public function process($event)
    {
        var_dump($event->obj);
        var_dump("事件触发后该监听器要执行" . TestListener::class);
    }
}