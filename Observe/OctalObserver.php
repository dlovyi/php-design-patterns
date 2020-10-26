<?php
namespace Observe;

class OctalObserver extends Observe
{

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        if ($this->subject->state == 2) {
            var_dump("Octal String: " . $this->subject->getState());
        }
    }
}