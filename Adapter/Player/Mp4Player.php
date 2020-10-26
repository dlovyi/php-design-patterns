<?php
namespace Adapter\Player;

use Adapter\interfaces\AdvanceMediaPlayer;

class Mp4Player implements AdvanceMediaPlayer
{

    public function playVlc($fileName)
    {
        return false;
    }

    public function playMp4($fileName)
    {
        var_dump("Play Mp4:" . $fileName);
    }
}