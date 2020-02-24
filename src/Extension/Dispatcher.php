<?php

namespace Orchestra\Contracts\Extension;

interface Dispatcher
{
    /**
     * Register the extension.
     */
    public function register(string $name, array $options): void;

    /**
     * Boot all extensions.
     */
    public function boot(): void;

    /**
     * Start the extension.
     */
    public function start(string $name, array $options): void;

    /**
     * Shutdown an extension.
     */
    public function finish(string $name, array $options): void;
}
