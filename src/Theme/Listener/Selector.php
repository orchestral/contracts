<?php

namespace Orchestra\Contracts\Theme\Listener;

interface Selector
{
    /**
     * Response when list themes page succeed.
     *
     * @return mixed
     */
    public function showThemeSelection(array $data);

    /**
     * Response when theme activation succeed.
     *
     * @param  string  $id
     *
     * @return mixed
     */
    public function themeHasActivated(string $type, $id);

    /**
     * Response when theme verification failed.
     *
     * @return mixed
     */
    public function themeFailedVerification();
}
