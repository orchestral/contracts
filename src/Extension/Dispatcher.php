<?php

namespace Orchestra\Contracts\Extension;

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
    public function register(string $name, array $options): void;

    /**
     * Boot all extensions.
     *
     * @return void
     */
    public function boot(): void;

    /**
     * Start the extension.
     *
     * @param  string  $name
     * @param  array   $options
     *
     * @return void
     */
    public function start(string $name, array $options): void;

    /**
     * Shutdown an extension.
     *
     * @param  string  $name
     * @param  array   $options
     *
     * @return void
     */
    public function finish(string $name, array $options): void;
}
