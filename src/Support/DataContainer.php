<?php

namespace Orchestra\Contracts\Support;

interface DataContainer
{
    /**
     * Get a item value.
     *
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Set a item value.
     *
     * @param  mixed  $value
     *
     * @return mixed
     */
    public function set(string $key, $value = null);

    /**
     * Check if item key has a value.
     */
    public function has(string $key): bool;

    /**
     * Remove a item key.
     */
    public function forget(string $key): bool;

    /**
     * Get all available items.
     */
    public function all(): array;
}
