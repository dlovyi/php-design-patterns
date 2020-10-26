<?php
namespace Observe;

class Subject
{

    protected $observers = [];

    public $state = 1;

    /**
     * 设置状态，状态改变通知观察者
     *
     * @param unknown $state            
     */
    public function setState($state)
    {
        $this->state = $state;
        
        $this->notify();
    }

    public function getState()
    {
        return $this->state;
    }

    public function attach(Observe $obs)
    {
        $this->observers[] = $obs;
    }

    public function detach(Observe $obs)
    {
        $key = array_search($obs, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        if (! empty($this->observers)) {
            foreach ($this->observers as $k => $obs) {
                $obs->update($this);
            }
        }
    }
}