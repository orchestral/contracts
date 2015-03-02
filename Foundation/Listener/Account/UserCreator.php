<?php namespace Orchestra\Contracts\Foundation\Listener\Account;

interface UserCreator
{
    /**
     * Response when create user page succeed.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function showUserCreator(array $data);

    /**
     * Response when storing user failed on validation.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     *
     * @return mixed
     */
    public function createUserFailedValidation($errors);

    /**
     * Response when storing user failed.
     *
     * @param  array  $errors
     *
     * @return mixed
     */
    public function createUserFailed(array $errors);

    /**
     * Response when storing user succeed.
     *
     * @return mixed
     */
    public function userCreated();
}
