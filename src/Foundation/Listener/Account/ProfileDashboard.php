<?php

namespace Orchestra\Contracts\Foundation\Listener\Account;

interface ProfileDashboard
{
    /**
     * Response to show dashboard.
     *
     * @return mixed
     */
    public function showDashboard(array $data);
}
