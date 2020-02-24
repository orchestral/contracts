<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\ProfileCreator as Listener;

interface ProfileCreator
{
    /**
     * View registration page.
     *
     * @return mixed
     */
    public function create(Listener $listener);

    /**
     * Create a new user.
     *
     * @return mixed
     */
    public function store(Listener $listener, array $input);
}
