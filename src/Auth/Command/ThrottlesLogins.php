<?php

namespace Orchestra\Contracts\Auth\Command;

interface ThrottlesLogins
{
    /**
     * Determine if the user has too many failed login attempts.
     *
     * @return bool
     */
    public function hasTooManyLoginAttempts();

    /**
     * Determine how many retries left.
     *
     * @return int
     */
    public function retriesLeft();

    /**
     * Get total seconds before doing another login attempts for the user.
     *
     * @return int
     */
    public function getSecondsBeforeNextAttempts();

    /**
     * Increment the login attempts for the user.
     *
     * @return void
     */
    public function incrementLoginAttempts();

    /**
     * Clear the login locks for the given user credentials.
     *
     * @return void
     */
    public function clearLoginAttempts();
}
