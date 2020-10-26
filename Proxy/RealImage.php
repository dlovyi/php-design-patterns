<?php
namespace Proxy;

use Proxy\Interfaces\Image;

class RealImage implements Image
{

    protected $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function display()
    {
        echo "Dispaly $this->fileName Image <br/>";
    }
}