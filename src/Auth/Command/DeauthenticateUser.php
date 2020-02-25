<?php

namespace Orchestra\Contracts\Auth\Command;

use Orchestra\Contracts\Auth\Listener\DeauthenticateUser as Listener;

interface DeauthenticateUser
{
    /**
     * Logout a user.
     *
     * @return mixed
     */
    public function logout(Listener $listener);
}
