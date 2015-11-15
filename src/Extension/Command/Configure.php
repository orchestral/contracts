<?php namespace Orchestra\Contracts\Extension\Command;

use Illuminate\Support\Fluent;
use Orchestra\Contracts\Extension\Listener\Configure as Listener;

interface Configure
{
    /**
     * View edit extension configuration page.
     *
     * @param  \Orchestra\Contracts\Extension\Listener\Configure  $listener
     * @param  \Illuminate\Support\Fluent  $extension
     *
     * @return mixed
     */
    public function configure(Listener $listener, Fluent $extension);

    /**
     * Update an extension configuration.
     *
     * @param  \Orchestra\Contracts\Extension\Listener\Configure  $listener
     * @param  \Illuminate\Support\Fluent  $extension
     * @param  array  $input
     *
     * @return mixed
     */
    public function update(Listener $listener, Fluent $extension, array $input);
}
