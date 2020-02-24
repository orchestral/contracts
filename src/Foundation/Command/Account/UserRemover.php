<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\UserRemover as Listener;

interface UserRemover
{
    /**
     * Destroy a user.
     *
     * @param  string|int  $id
     *
     * @return mixed
     */
    public function destroy(Listener $listener, $id);
}
