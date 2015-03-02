<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\UserCreator as Listener;

interface UserCreator
{
    /**
     * View create user page.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\UserCreator  $listener
     *
     * @return mixed
     */
    public function create(Listener $listener);
}
