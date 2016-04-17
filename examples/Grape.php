<?php
/**
 * Created by PhpStorm.
 * User: huangxf
 * Date: 16/4/17
 * Time: 下午3:30
 */

namespace Grape;

abstract class MainServer
{
    abstract public function onStart();

    abstract public function onClose();

    abstract public function onConnection();

    abstract public function onDisconnection();

    abstract public function onDispatch();

    public function addListener(string $host, int $port, $type)
    {
    };

}

abstract class AsyncServer
{
    abstract public function onStart();

    abstract public function onClose();

    public function send(int $fd, string $data, int $from_id = 0)
    {

    }

    public function close(int $fd, bool $reset = false)
    {

    }

}

abstract class SyncServer
{
    abstract public function onStart();

    abstract public function onClose();

}