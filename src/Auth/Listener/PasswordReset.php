<?php

namespace Orchestra\Contracts\Auth\Listener;

interface PasswordReset
{
    /**
     * Response when reset password failed.
     *
     * @param  string  $response
     *
     * @return mixed
     */
    public function passwordResetHasFailed($response);

    /**
     * Response when reset password succeed.
     *
     * @param  string  $response
     *
     * @return mixed
     */
    public function passwordHasReset($response);
}
