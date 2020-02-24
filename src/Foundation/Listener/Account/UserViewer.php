<?php

namespace Orchestra\Contracts\Foundation\Listener\Account;

interface UserViewer
{
    /**
     * Response when list users page succeed.
     *
     * @return mixed
     */
    public function showUsers(array $data);
}
