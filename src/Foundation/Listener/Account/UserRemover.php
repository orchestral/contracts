<?php

namespace Orchestra\Contracts\Foundation\Listener\Account;

interface UserRemover
{
    /**
     * Response when user tried to self delete.
     *
     * @return mixed
     */
    public function selfDeletionFailed();

    /**
     * Response when destroying user failed.
     *
     * @return mixed
     */
    public function userDeletionFailed(array $errors);

    /**
     * Response when destroying user succeed.
     *
     * @return mixed
     */
    public function userDeleted();
}
