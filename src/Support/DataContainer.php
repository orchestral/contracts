<?php

namespace Orchestra\Contracts\Support;

interface DataContainer
{
    /**
     * Get a item value.
     *
     * @param  string  $key
     * @param  mixed   $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Set a item value.
     *
     * @param  string  $key
     * @param  mixed   $value
     *
     * @return mixed
     */
    public function set(string $key, $value = null);

    /**
     * Check if item key has a value.
     *
     * @param  string  $key
     *
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Remove a item key.
     *
     * @param  string   $key
     *
     * @return bool
     */
    public function forget(string $key): bool;

    /**
     * Get all available items.
     *
     * @return array
     */
    public function all(): array;
}
