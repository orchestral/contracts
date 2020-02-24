<?php

namespace Orchestra\Contracts\Auth\Command;

use Orchestra\Contracts\Auth\Listener\AuthenticateUser as Listener;

interface AuthenticateUser
{
    /**
     * Login a user.
     *
     * @return mixed
     */
    public function login(Listener $listener, array $input);
}
