<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\UserViewer as Listener;

interface UserViewer
{
    /**
     * View list users page.
     *
     * @return mixed
     */
    public function view(Listener $listener, array $input = []);
}
