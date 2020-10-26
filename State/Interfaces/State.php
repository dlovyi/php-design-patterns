<?php
namespace State\Interfaces;

use State\Content;

interface State
{

    public function doAction(Content $content);
}