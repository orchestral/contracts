<?php

namespace Orchestra\Contracts\Extension\Command;

use Illuminate\Support\Fluent;
use Orchestra\Contracts\Extension\Listener\Configure as Listener;

interface Configure
{
    /**
     * View edit extension configuration page.
     *
     * @return mixed
     */
    public function configure(Listener $listener, Fluent $extension);

    /**
     * Update an extension configuration.
     *
     * @return mixed
     */
    public function update(Listener $listener, Fluent $extension, array $input);
}
