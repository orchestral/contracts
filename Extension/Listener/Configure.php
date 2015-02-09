<?php namespace Orchestra\Contracts\Extension\Listener;

interface Configure
{
    /**
     * Response for extension configuration.
     *
     * @param  array  $data
     * @return mixed
     */
    public function showConfigurationChanger(array $data);

    /**
     * Response when update extension configuration failed on validation.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     * @param  string  $id
     * @return mixed
     */
    public function updateConfigurationFailedValidation($errors, $id);

    /**
     * Response to extension configuration has succeed.
     *
     * @param  array  $data
     * @return mixed
     */
    public function configurationUpdated(array $data);
}
