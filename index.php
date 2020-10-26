<?php
require_once 'autoload.php';
require_once 'Dispacher.php';

if (! defined("ROOT_PATH")) {
    define("ROOT_PATH", __DIR__);
}
$dispacher = new Dispacher();
$dispacher->run();
