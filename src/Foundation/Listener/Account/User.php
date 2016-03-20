<?php

namespace Orchestra\Contracts\Foundation\Listener\Account;

interface User
{
    /**
     * Abort request when user mismatched.
     *
     * @return mixed
     */
    public function abortWhenUserMismatched();
}
