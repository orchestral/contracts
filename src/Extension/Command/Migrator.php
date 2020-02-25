<?php

namespace Orchestra\Contracts\Extension\Command;

use Illuminate\Support\Fluent;
use Orchestra\Contracts\Extension\Listener\Migrator as Listener;

interface Migrator
{
    /**
     * Update/migrate an extension.
     *
     * @return mixed
     */
    public function migrate(Listener $listener, Fluent $extension);
}
