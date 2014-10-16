<?php namespace Orchestra\Contracts\Foundation;

use Closure;

interface Foundation
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
     * Get memory services.
     *
     * @var \Orchestra\Memory\Provider
     */
    public function memory();

    /**
     * Get menu services.
     *
     * @var \Orchestra\Widget\MenuWidgetHandler
     */
    public function menu();

    /**
     * Register the given Closure with the "group" function namespace set.
     *
     * @param  string|null  $namespace
     * @param  \Closure|null  $callback
     * @return void
     */
    public function namespaced($namespace, Closure $callback);
}
