<?php namespace Orchestra\Contracts\Extension\Command;

use Illuminate\Support\Fluent;
use Orchestra\Contracts\Extension\Listener\Activator as Listener;

interface Activator
{
    /**
     * Activate an extension.
     *
     * @param  \Orchestra\Contracts\Extension\Listener\Activator  $listener
     * @param  \Illuminate\Support\Fluent  $extension
     *
     * @return mixed
     */
    public function activate(Listener $listener, Fluent $extension);
}
