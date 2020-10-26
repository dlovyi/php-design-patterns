<?php
namespace Observe;

abstract class Observe
{
    protected $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    abstract public function update();
}