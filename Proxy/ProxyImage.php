<?php
namespace Proxy;

use Proxy\Interfaces\Image;

class ProxyImage implements Image
{

    protected $realImage;

    protected $fileName;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    public function display()
    {
        if (empty($this->realImage)) {
            $this->realImage = new RealImage($this->fileName);
        }
        echo "Use ProxyImage <br/>";
        $this->realImage->display();
    }
}