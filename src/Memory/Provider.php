<?php

namespace Orchestra\Contracts\Memory;

use Orchestra\Contracts\Support\DataContainer;

interface Provider extends DataContainer
{
    /**
     * Shutdown/finish method.
     */
    public function finish(): bool;

    /**
     * Remove a item key.
     */
    public function forget(string $key): bool;

    /**
     * Get a item value.
     *
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Check if item key has a value.
     */
    public function has(string $key): bool;

    /**
     * Set a value from a key.
     *
     * @param  mixed  $value
     *
     * @return mixed
     */
    public function put(string $key, $value = '');
}
