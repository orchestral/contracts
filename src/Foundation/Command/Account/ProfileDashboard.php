<?php

namespace Orchestra\Contracts\Foundation\Command\Account;

use Orchestra\Contracts\Foundation\Listener\Account\ProfileDashboard as Listener;

interface ProfileDashboard
{
    /**
     * View dashboard.
     *
     * @return mixed
     */
    public function show(Listener $listener);
}
