<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Illuminate\Contracts\Auth\Authenticatable;
use Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater as Listener;

interface ProfileUpdater
{
    /**
     * Get account/profile information.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater  $listener
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     *
     * @return mixed
     */
    public function edit(Listener $listener, Authenticatable $user);

    /**
     * Update profile information.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater  $listener
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $input
     *
     * @return mixed
     */
    public function update(Listener $listener, Authenticatable $user, array $input);
}
