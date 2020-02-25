<?php

namespace Orchestra\Contracts\Foundation;

use Closure;
use Orchestra\Contracts\Authorization\Authorization;
use Orchestra\Contracts\Http\RouteManager;
use Orchestra\Contracts\Memory\Provider as MemoryProvider;

interface Foundation extends RouteManager
{
    /**
     * Start the application.
     *
     * @return $this
     */
    public function boot();

    /**
     * Get installation status.
     */
    public function installed(): bool;

    /**
     * Get acl services.
     */
    public function acl(): ?Authorization;

    /**
     * Get memory services.
     */
    public function memory(): ?MemoryProvider;

    /**
     * Get menu services.
     *
     * @return \Orchestra\Widget\Handlers\Menu
     */
    public function menu();

    /**
     * Register the given Closure with the "group" function namespace set.
     *
     * @param  string|null  $namespace
     * @param  array|\Closure  $attributes
     */
    public function namespaced($namespace, $attributes = [], Closure $callback = null): void;
}
