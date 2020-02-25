<?php

namespace Orchestra\Contracts\Memory;

interface Handler
{
    /**
     * Initialize method.
     */
    public function initiate(): array;

    /**
     * Shutdown method.
     */
    public function finish(array $items = []): bool;
}
