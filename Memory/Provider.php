<?php namespace Orchestra\Contracts\Memory;

use Orchestra\Contracts\Support\DataContainer;

interface Provider extends DataContainer
{
    /**
     * Shutdown/finish method.
     *
     * @return bool
     */
    public function finish();

    /**
     * Remove a item key.
     *
     * @param  string  $key
     *
     * @return void
     */
    public function forget($key);

    /**
     * Get a item value.
     *
     * @param  string  $key
     * @param  mixed   $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Check if item key has a value.
     *
     * @param  string  $key
     *
     * @return bool
     */
    public function has($key);

    /**
     * Set a value from a key.
     *
     * @param  string  $key    A string of key to add the value.
     * @param  mixed   $value  The value.
     *
     * @return mixed
     */
    public function put($key, $value = '');
}
