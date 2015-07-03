<?php namespace Orchestra\Contracts\Auth\Command;

interface ThrottlesLogins
{
    /**
     * Determine if the user has too many failed login attempts.
     *
     * @param  array  $input
     * @return bool
     */
    public function hasTooManyLoginAttempts(array $input);

     /**
     * Get the login attempts for the user.
     *
     * @param  array  $input
     * @return int
     */
    public function getLoginAttempts(array $input);

    /**
     * Increment the login attempts for the user.
     *
     * @param  array  $input
     * @return int
     */
    public function incrementLoginAttempts(array $input);
}
