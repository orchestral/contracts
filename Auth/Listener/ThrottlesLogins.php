<?php namespace Orchestra\Contracts\Auth\Listener;

interface ThrottlesLogins
{
    /**
     * Redirect the user after determining they are locked out.
     *
     * @param  array  $errors
     * @param  int  $seconds
     *
     * @return mixed
     */
    public function sendLockoutResponse(array $errors, $seconds);
}
