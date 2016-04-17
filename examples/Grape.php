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
    /**
     * 主进程启动
     * @param $server
     * @return mixed
     */
    abstract public function onStart();

    abstract public function onClose();

    abstract public function onConnection();

    abstract public function onDisconnection();

    abstract public function onDispatch();

    public function addListener(string $host, int $port, $type)
    {
    }

}

abstract class AsyncServer
{
    abstract public function onStart();

    abstract public function onClose();

    public function send(int $fd, string $data, int $from_id = 0)
    {

    }

    abstract public function close(int $fd, bool $reset = false);

    abstract public function onReceive($server, int $fd, int $from_id, string $data);

    abstract public function onFinish($serv, int $task_id, string $data);

}

abstract class SyncServer
{
    abstract public function onStart();

    abstract public function onClose();

    public function onTask($serv, int $task_id, int $from_id, string $data)
    {
    }

}