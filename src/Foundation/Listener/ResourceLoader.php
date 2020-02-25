<?php

namespace Orchestra\Contracts\Foundation\Listener;

interface ResourceLoader
{
    /**
     * Response when show resources lists succeed.
     *
     * @return mixed
     */
    public function showResourcesList(array $data);

    /**
     * Response when load resource succeed.
     *
     * @return mixed
     */
    public function onRequestSucceed(array $data);
}
