<?php
namespace Adapter\Player;

use Adapter\interfaces\AdvanceMediaPlayer;

class VlcPlayer implements AdvanceMediaPlayer
{

    public function playVlc($fileName)
    {
        var_dump("Play Vlc:" . $fileName);
    }

    public function playMp4($fileName)
    {
        return false;
    }
}