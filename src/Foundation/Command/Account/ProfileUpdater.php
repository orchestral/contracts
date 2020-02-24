<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\ProfileUpdater as Listener;

interface ProfileUpdater
{
    /**
     * Get account/profile information.
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update profile information.
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
