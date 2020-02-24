<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\UserUpdater as Listener;

interface UserUpdater
{
    /**
     * Update a user.
     *
     * @param  string|int  $id
     *
     * @return mixed
     */
    public function update(Listener $listener, $id, array $input);
}
