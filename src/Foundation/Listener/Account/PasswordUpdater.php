<?php

namespace Orchestra\Contracts\Foundation\Listener\Account;

interface PasswordUpdater extends User
{
    /**
     * Response to show user password.
     *
     * @return mixed
     */
    public function showPasswordChanger(array $data);

    /**
     * Response when validation on change password failed.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     *
     * @return mixed
     */
    public function updatePasswordFailedValidation($errors);

    /**
     * Response when verify current password failed.
     *
     * @return mixed
     */
    public function verifyCurrentPasswordFailed();

    /**
     * Response when update password failed.
     *
     * @return mixed
     */
    public function updatePasswordFailed(array $errors);

    /**
     * Response when update password succeed.
     *
     * @return mixed
     */
    public function passwordUpdated();
}
