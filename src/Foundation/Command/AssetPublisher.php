<?php namespace Orchestra\Contracts\Foundation\Command;

use Orchestra\Contracts\Foundation\Listener\AssetPublishing as Listener;

interface AssetPublisher
{
    /**
     * Run publishing if possible.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\AssetPublishing  $listener
     *
     * @return mixed
     */
    public function executeAndRedirect(Listener $listener);

    /**
     * Publish process.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\AssetPublishing  $listener
     * @param  array $input
     *
     * @return mixed
     */
    public function publish(Listener $listener, array $input);
}
