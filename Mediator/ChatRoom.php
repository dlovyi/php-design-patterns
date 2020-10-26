<?php
namespace Mediator;

class ChatRoom
{

    public static function showMessage(User $user, $msg = '')
    {
        echo date("Y-m-d H:i:s") . " " . $user->getName() . " :" . $msg . '<br/>';
    }
}