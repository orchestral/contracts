<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\PasswordUpdater as Listener;

interface PasswordUpdater
{
    /**
     * Get password information.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\PasswordUpdater  $listener
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update password information.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\PasswordUpdater  $listener
     * @param  array  $input
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
