<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\UserViewer as Listener;

interface UserViewer
{
    /**
     * View list users page.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\UserViewer  $listener
     * @param  array  $input
     *
     * @return mixed
     */
    public function index(Listener $listener, array $input = []);
}
