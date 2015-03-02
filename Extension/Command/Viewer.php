<?php namespace Orchestra\Contracts\Extension\Command;

use Orchestra\Contracts\Extension\Listener\Viewer as Listener;

interface Viewer
{
    /**
     * View all extension page.
     *
     * @param  \Orchestra\Contracts\Extension\Listener\Viewer  $listener
     *
     * @return mixed
     */
    public function index(Listener $listener);
}
