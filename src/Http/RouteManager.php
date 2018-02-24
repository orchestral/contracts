<?php

namespace Orchestra\Contracts\Http;

use Closure;

interface RouteManager
{
    /**
     *  Return locate handles configuration for a package/app.
     *
     * @param  string  $path
     *
     * @return array
     */
    public function locate(string $path): array;

    /**
     * Return route group dispatch for a package/app.
     *
     * @param  string  $name
     * @param  string  $default
     * @param  array|\Closure  $attributes
     * @param  \Closure|null  $callback
     *
     * @return array
     */
    public function group(string $name, string $default, $attributes = [], Closure $callback = null): array;

    /**
     *  Return handles URL for a package/app.
     *
     * @param  string  $path
     * @param  array  $options
     *
     * @return string
     */
    public function handles(string $path, array $options = []): string;

    /**
     *  Return if handles URL match given string.
     *
     * @param  string  $path
     *
     * @return bool
     */
    public function is(string $path): bool;

    /**
     * Get extension route.
     *
     * @param  string  $name
     * @param  string  $default
     *
     * @return \Orchestra\Contracts\Extension\UrlGenerator
     */
    public function route(string $name, string $default = '/');

    /**
     * Run the callback when route is matched.
     *
     * @param  string  $path
     * @param  mixed   $listener
     *
     * @return void
     */
    public function when(string $path, $listener): void;

    /**
     * Run the callback when route is matched.
     *
     * @param  string  $path
     * @param  string  $on
     * @param  mixed   $listener
     *
     * @return void
     */
    public function whenOn(string $path, string $on, $listener): void;
}
