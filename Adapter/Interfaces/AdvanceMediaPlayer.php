<?php
namespace Adapter\interfaces;

interface AdvanceMediaPlayer
{

    public function playVlc($fileName);

    public function playMp4($fileName);
}