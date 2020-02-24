<?php

namespace Orchestra\Contracts\Extension\Command;

use Orchestra\Contracts\Extension\Listener\Viewer as Listener;

interface Viewer
{
    /**
     * View all extension page.
     *
     * @return mixed
     */
    public function view(Listener $listener);
}
