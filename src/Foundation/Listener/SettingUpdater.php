<?php

namespace Orchestra\Contracts\Foundation\Listener;

interface SettingUpdater
{
    /**
     * Response when show setting page.
     *
     * @return mixed
     */
    public function showSettingChanger(array $data);

    /**
     * Response when update setting failed on validation.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     *
     * @return mixed
     */
    public function settingFailedValidation($errors);

    /**
     * Response when update setting succeed.
     *
     * @return mixed
     */
    public function settingHasUpdated();
}
