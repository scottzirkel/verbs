<?php

namespace Thunk\Verbs\Contracts;

use Thunk\Verbs\Event;

interface Bus
{
    public function listen(object $listener): void;

    public function dispatch(Event $event): void;

    public function replay(Event $event): void;
}
