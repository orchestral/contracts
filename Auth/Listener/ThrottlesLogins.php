<?php namespace Orchestra\Contracts\Auth\Listener;

interface ThrottlesLogins extends AuthenticateUser
{
    /**
     * Redirect the user after determining they are locked out.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     * @param  int  $seconds
     *
     * @return mixed
     */
    public function sendLockoutResponse($errors, $seconds);
}
