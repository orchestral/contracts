<?php

namespace Orchestra\Contracts\Extension;

use Closure;

interface Factory
{
    /**
     * Activate an extension.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function activate(string $name): bool;

    /**
     * Check whether an extension is active.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function activated(string $name): bool;

    /**
     * Check whether an extension is available.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function available(string $name): bool;

    /**
     * Boot active extensions.
     *
     * @return $this
     */
    public function boot();

    /**
     * Check if extension is booted.
     *
     * @return bool
     */
    public function booted(): bool;

    /**
     * Create an event listener or execute it directly.
     *
     * @param  \Closure|null  $callback
     *
     * @return void
     */
    public function after(Closure $callback = null): void;

    /**
     * Deactivate an extension.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function deactivate(string $name): bool;

    /**
     * Detect all extensions.
     *
     * @return \Illuminate\Support\Collection|array
     */
    public function detect();

    /**
     * Get extension finder.
     *
     * @return \Orchestra\Contracts\Extension\Finder
     */
    public function finder(): Finder;

    /**
     * Shutdown all extensions.
     *
     * @return $this
     */
    public function finish();

    /**
     * Get an option for a given extension.
     *
     * @param  string  $name
     * @param  string  $option
     * @param  mixed   $default
     *
     * @return mixed
     */
    public function option(string $name, string $option, $default = null);

    /**
     * Check whether an extension has a writable public asset.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function permission(string $name): bool;

    /**
     * Publish an extension.
     *
     * @param  string  string
     *
     * @return void
     */
    public function publish(string $name): void;

    /**
     * Reset extension.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function reset(string $name): bool;

    /**
     * Get extension route handle.
     *
     * @param  string  $name
     * @param  string  $default
     *
     * @return \Orchestra\Contracts\Extension\UrlGenerator
     */
    public function route(string $name, string $default = '/'): UrlGenerator;

    /**
     * Check if extension is started.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function started(string $name): bool;
}
