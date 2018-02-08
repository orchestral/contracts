<?php

namespace Orchestra\Contracts\Memory;

use Orchestra\Contracts\Support\DataContainer;

interface Provider extends DataContainer
{
    /**
     * Shutdown/finish method.
     *
     * @return bool
     */
    public function finish(): bool;

    /**
     * Remove a item key.
     *
     * @param  string  $key
     *
     * @return bool
     */
    public function forget(string $key): bool;

    /**
     * Get a item value.
     *
     * @param  string  $key
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Check if item key has a value.
     *
     * @param  string  $key
     *
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Set a value from a key.
     *
     * @param  string  $key
     * @param  mixed  $value
     *
     * @return mixed
     */
    public function put(string $key, $value = '');
}
