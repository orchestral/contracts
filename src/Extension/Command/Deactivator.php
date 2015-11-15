<?php namespace Orchestra\Contracts\Extension\Command;

use Illuminate\Support\Fluent;
use Orchestra\Contracts\Extension\Listener\Deactivator as Listener;

interface Deactivator
{
    /**
     * Deactivate an extension.
     *
     * @param  \Orchestra\Contracts\Extension\Listener\Deactivator  $listener
     * @param  \Illuminate\Support\Fluent  $extension
     *
     * @return mixed
     */
    public function deactivate(Listener $listener, Fluent $extension);
}
