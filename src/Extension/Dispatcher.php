<?php namespace Orchestra\Contracts\Extension;

interface Dispatcher
{
    /**
     * Register the extension.
     *
     * @param  string  $name
     * @param  array   $options
     *
     * @return void
     */
    public function register($name, array $options);

    /**
     * Boot all extensions.
     *
     * @return void
     */
    public function boot();

    /**
     * Start the extension.
     *
     * @param  string  $name
     * @param  array   $options
     *
     * @return void
     */
    public function start($name, array $options);

    /**
     * Shutdown an extension.
     *
     * @param  string  $name
     * @param  array   $options
     *
     * @return void
     */
    public function finish($name, array $options);
}
