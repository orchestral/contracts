<?php namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\ProfileDashboard as Listener;

interface ProfileDashboard
{
    /**
     * View dashboard.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\Account\ProfileDashboard $listener
     *
     * @return mixed
     */
    public function show(Listener $listener);
}
