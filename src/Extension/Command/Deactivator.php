<?php

namespace Orchestra\Contracts\Extension\Command;

use Illuminate\Support\Fluent;
use Orchestra\Contracts\Extension\Listener\Deactivator as Listener;

interface Deactivator
{
    /**
     * Deactivate an extension.
     *
     * @return mixed
     */
    public function deactivate(Listener $listener, Fluent $extension);
}
