<?php

use Todo\PBVoid;
use Grpc\BaseStub;
use Todo\TaskList;

require __DIR__ . '/vendor/autoload.php';

class TodoClient extends BaseStub
{
    public function add()
    {
        //
    }

    public function list()
    {
        return $this->_simpleRequest('/todo.Tasks/List', new PBVoid, [TaskList::class, 'decode']);
    }
}

$client = new TodoClient('127.0.0.1:8888', [
    'credentials' => Grpc\ChannelCredentials::createInsecure(),
]);

[$data, $status] = $client->list()->wait();

