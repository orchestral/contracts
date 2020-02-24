<?php

namespace Orchestra\Contracts\Foundation\Command;

use Orchestra\Contracts\Foundation\Listener\AssetPublishing as Listener;

interface AssetPublisher
{
    /**
     * Run publishing if possible.
     *
     * @return mixed
     */
    public function executeAndRedirect(Listener $listener);

    /**
     * Publish process.
     *
     * @return mixed
     */
    public function publish(Listener $listener, array $input);
}
