<?php

namespace Orchestra\Contracts\Foundation;

use Closure;
use Orchestra\Contracts\Http\RouteManager;
use Orchestra\Contracts\Authorization\Authorization;
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
     *
     * @return bool
     */
    public function installed(): bool;

    /**
     * Get acl services.
     *
     * @var \Orchestra\Contracts\Auth\Authorization|null
     */
    public function acl(): ?Authorization;

    /**
     * Get memory services.
     *
     * @var \Orchestra\Contracts\Memory\Provider|null
     */
    public function memory(): ?MemoryProvider;

    /**
     * Get menu services.
     *
     * @var \Orchestra\Widget\Handlers\Menu
     */
    public function menu();

    /**
     * Register the given Closure with the "group" function namespace set.
     *
     * @param  string|null  $namespace
     * @param  array|\Closure  $attributes
     * @param  \Closure|null  $callback
     *
     * @return void
     */
    public function namespaced($namespace, $attributes = [], Closure $callback = null): void;
}
