<?php

namespace Orchestra\Contracts\Http;

use Closure;

interface RouteManager
{
    /**
     *  Return locate handles configuration for a package/app.
     */
    public function locate(string $path): array;

    /**
     * Return route group dispatch for a package/app.
     *
     * @param  array|\Closure  $attributes
     */
    public function group(string $name, string $default, $attributes = [], Closure $callback = null): array;

    /**
     *  Return handles URL for a package/app.
     */
    public function handles(string $path, array $options = []): string;

    /**
     *  Return if handles URL match given string.
     */
    public function is(string $path): bool;

    /**
     * Get extension route.
     *
     * @return \Orchestra\Contracts\Extension\UrlGenerator
     */
    public function route(string $name, string $default = '/');

    /**
     * Run the callback when route is matched.
     *
     * @param  mixed   $listener
     */
    public function when(string $path, $listener): void;

    /**
     * Run the callback when route is matched.
     *
     * @param  mixed   $listener
     */
    public function whenOn(string $path, string $on, $listener): void;
}
