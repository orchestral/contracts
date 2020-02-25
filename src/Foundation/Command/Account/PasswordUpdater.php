<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\PasswordUpdater as Listener;

interface PasswordUpdater
{
    /**
     * Get password information.
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update password information.
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
