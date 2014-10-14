<?php namespace Orchestra\Contracts\Memory\MemoryHandler;

use Orchestra\Contracts\Support\DataContainer;

interface MemoryHandler extends DataContainer
{
    /**
     * Initialize method.
     *
     * @return array
     */
    public function initiate();

    /**
     * Shutdown method.
     *
     * @param  array   $items
     * @return bool
     */
    public function finish(array $items = []);
}
