<?php

namespace Orchestra\Contracts\Auth\Listener;

use Illuminate\Contracts\Auth\Authenticatable;

interface AuthenticateUser
{
    /**
     * Response to user log-in trigger failed validation .
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     *
     * @return mixed
     */
    public function userLoginHasFailedValidation($errors);

    /**
     * Response to user log-in trigger has failed authentication.
     *
     * @return mixed
     */
    public function userLoginHasFailedAuthentication(array $input);

    /**
     * Response to user has logged in successfully.
     *
     * @return mixed
     */
    public function userHasLoggedIn(Authenticatable $user);
}
