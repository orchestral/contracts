<?php

namespace Orchestra\Contracts\Extension\Listener;

use Illuminate\Support\Fluent;

interface Configure extends Extension
{
    /**
     * Response for extension configuration.
     *
     * @return mixed
     */
    public function showConfigurationChanger(array $data);

    /**
     * Response when update extension configuration failed on validation.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     * @param  string  $id
     *
     * @return mixed
     */
    public function updateConfigurationFailedValidation($errors, $id);

    /**
     * Response to extension configuration has succeed.
     *
     * @return mixed
     */
    public function configurationUpdated(Fluent $extension);
}
