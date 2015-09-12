<?php namespace Orchestra\Contracts\Http;

use Closure;

interface RouteManager
{
    /**
     *  Return locate handles configuration for a package/app.
     *
     * @param  string   $path
     *
     * @return array
     */
    public function locate($path);

    /**
     * Return route group dispatch for a package/app.
     *
     * @param  string           $name
     * @param  string           $default
     * @param  array|\Closure   $attributes
     * @param  \Closure|null    $callback
     *
     * @return array
     */
    public function group($name, $default, $attributes = [], Closure $callback = null);

    /**
     *  Return handles URL for a package/app.
     *
     * @param  string   $path
     *
     * @return string
     */
    public function handles($path);

    /**
     *  Return if handles URL match given string.
     *
     * @param  string   $path
     *
     * @return bool
     */
    public function is($path);

    /**
     * Get extension route.
     *
     * @param  string   $name
     * @param  string   $default
     *
     * @return \Orchestra\Contracts\Extension\RouteGenerator
     */
    public function route($name, $default = '/');

    /**
     * Run the callback when route is matched.
     *
     * @param  string  $path
     * @param  mixed   $listener
     *
     * @return void
     */
    public function when($path, $listener);

    /**
     * Run the callback when route is matched.
     *
     * @param  string  $path
     * @param  string  $on
     * @param  mixed   $listener
     *
     * @return void
     */
    public function whenOn($path, $on, $listener);
}
