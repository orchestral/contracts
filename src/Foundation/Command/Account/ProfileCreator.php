<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\ProfileCreator as Listener;

interface ProfileCreator
{
    /**
     * View registration page.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileCreator  $listener
     *
     * @return mixed
     */
    public function create(Listener $listener);

    /**
     * Create a new user.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileCreator  $listener
     * @param  array  $input
     *
     * @return mixed
     */
    public function store(Listener $listener, array $input);
}
