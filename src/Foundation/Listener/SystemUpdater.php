<?php

namespace Orchestra\Contracts\Foundation\Listener;

interface SystemUpdater
{
    /**
     * Response when update Orchestra Platform succeed.
     *
     * @return mixed
     */
    public function systemHasUpdated();
}
