<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\UserRemover as Listener;

interface UserRemover
{
    /**
     * Destroy a user.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\UserRemover  $listener
     * @param  string|int  $id
     *
     * @return mixed
     */
    public function destroy(Listener $listener, $id);
}
