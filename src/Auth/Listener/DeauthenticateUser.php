<?php

namespace Orchestra\Contracts\Auth\Listener;

interface DeauthenticateUser
{
    /**
     * Response to user has logged out successfully.
     *
     * @return mixed
     */
    public function userHasLoggedOut();
}
