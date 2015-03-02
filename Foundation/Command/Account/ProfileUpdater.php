<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater as Listener;

interface ProfileUpdater
{
    /**
     * Get account/profile information.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater  $listener
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update profile information.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater  $listener
     * @param  array  $input
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
