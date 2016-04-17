<?php
/**
 * Created by PhpStorm.
 * User: huangxf
 * Date: 16/4/17
 * Time: 下午3:42
 */

namespace MyChatServer;

use Grape\AsyncServer;
use Grape\int;
use Grape\MainServer;
use Grape\string;

class MyMainServer extends MainServer
{
    public function onStart()
    {
        // TODO: Implement onStart() method.
    }

    public function onClose()
    {
        // TODO: Implement onClose() method.
    }

    public function onConnection()
    {
        // TODO: Implement onConnection() method.
    }

    public function onDisconnection()
    {
        // TODO: Implement onDisconnection() method.
    }

    public function onDispatch()
    {
        // TODO: Implement onDispatch() method.
    }

}

class MyAServer extends AsyncServer
{
    public function onStart()
    {
        // TODO: Implement onStart() method.
    }

    public function onClose()
    {
        // TODO: Implement onClose() method.
    }

    public function onReceive($server, int $fd, int $from_id, string $data)
    {
        // TODO: Implement onReceive() method.
    }

    public function onFinish($serv, int $task_id, string $data)
    {
        // TODO: Implement onFinish() method.
    }


}