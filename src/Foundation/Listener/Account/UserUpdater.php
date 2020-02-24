<?php

namespace Orchestra\Contracts\Foundation\Listener\Account;

interface UserUpdater extends User
{
    /**
     * Response when update user page succeed.
     *
     * @return mixed
     */
    public function showUserChanger(array $data);

    /**
     * Response when update user failed on validation.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     * @param  string|int  $id
     *
     * @return mixed
     */
    public function updateUserFailedValidation($errors, $id);

    /**
     * Response when updating user failed.
     *
     * @return mixed
     */
    public function updateUserFailed(array $errors);

    /**
     * Response when updating user succeed.
     *
     * @return mixed
     */
    public function userUpdated();
}
