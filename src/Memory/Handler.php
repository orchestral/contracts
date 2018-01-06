<?php

namespace Orchestra\Contracts\Memory;

interface Handler
{
    /**
     * Initialize method.
     *
     * @return array
     */
    public function initiate(): array;

    /**
     * Shutdown method.
     *
     * @param  array  $items
     *
     * @return bool
     */
    public function finish(array $items = []): bool;
}
