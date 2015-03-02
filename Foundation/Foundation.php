<?php namespace Orchestra\Contracts\Foundation;

use Closure;
use Orchestra\Contracts\Http\RouteManager;

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
    public function installed();

    /**
     * Get acl services.
     *
     * @var \Orchestra\Contracts\Auth\Authorization
     */
    public function acl();

    /**
     * Get memory services.
     *
     * @var \Orchestra\Contracts\Memory\Provider
     */
    public function memory();

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
     * @param  \Closure|null  $callback
     *
     * @return void
     */
    public function namespaced($namespace, Closure $callback);
}
