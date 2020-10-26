<?php
namespace Observe;

class BinaryObserver extends Observe
{

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        if ($this->subject->state >= 1) {
            var_dump("Binary String: State:" . $this->subject->getState());
        }
    }
}