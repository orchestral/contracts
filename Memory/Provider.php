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
     * Set a value from a key.
     *
     * @param  string  $key    A string of key to add the value.
     * @param  mixed   $value  The value.
     *
     * @return mixed
     */
    public function put($key, $value = '');
}
