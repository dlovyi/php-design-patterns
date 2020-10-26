<?php
namespace Observe;

class HexaObserver extends Observe
{

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function update()
    {
        if ($this->subject->state == 3) {
            var_dump("Hexa String: " . $this->subject->getState());
        }
    }
}