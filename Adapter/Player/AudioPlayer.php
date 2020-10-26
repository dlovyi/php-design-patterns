<?php
namespace Adapter\Player;

use Adapter\interfaces\MediaPlayer;
use Adapter\Adapter\MediaAdapter;

class AudioPlayer implements MediaPlayer
{
    public function play($audioType, $fileName)
    {
        if ($audioType == 'mp3') {
            var_dump("Play Mp3:" . $fileName);
        } else {
            $adapter = new MediaAdapter($audioType);
            $adapter->play($audioType, $fileName);
        }
    }
}