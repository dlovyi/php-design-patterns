<?php
namespace Adapter\Adapter;

use Adapter\interfaces\MediaPlayer;
use Adapter\Player\VlcPlayer;
use Adapter\Player\Mp4Player;

class MediaAdapter implements MediaPlayer
{

    private $advancePlayer = NULL;

    public function __construct($audioType)
    {
        if ($audioType == "vlc") {
            $this->advancePlayer = new VlcPlayer();
        } else if ($audioType == "mp4") {
            $this->advancePlayer = new Mp4Player();
        } else {
            $this->advancePlayer = null;
        }
    }

    public function play($audioType, $fileName)
    {
        if ($this->advancePlayer == null) {
            var_dump("Type:$audioType ,$fileName not supported");
            return false;
        }
        
        if ($audioType == "vlc") {
            $this->advancePlayer->playVlc($fileName);
        } else if ($audioType == "mp4") {
            $this->advancePlayer->playMp4($fileName);
        }
    }
}