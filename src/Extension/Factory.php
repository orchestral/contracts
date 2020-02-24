<?php

namespace Orchestra\Contracts\Extension;

use Closure;
use Illuminate\Support\Collection;

interface Factory
{
    /**
     * Activate an extension.
     */
    public function activate(string $name): bool;

    /**
     * Check whether an extension is active.
     */
    public function activated(string $name): bool;

    /**
     * Check whether an extension is available.
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
     */
    public function booted(): bool;

    /**
     * Create an event listener or execute it directly.
     */
    public function after(Closure $callback = null): void;

    /**
     * Deactivate an extension.
     */
    public function deactivate(string $name): bool;

    /**
     * Detect all extensions.
     */
    public function detect(): Collection;

    /**
     * Get extension finder.
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
     * @param  mixed  $default
     *
     * @return mixed
     */
    public function option(string $name, string $option, $default = null);

    /**
     * Check whether an extension has a writable public asset.
     */
    public function permission(string $name): bool;

    /**
     * Publish an extension.
     */
    public function publish(string $name): void;

    /**
     * Reset extension.
     */
    public function reset(string $name): bool;

    /**
     * Get extension route handle.
     */
    public function route(string $name, string $default = '/'): UrlGenerator;

    /**
     * Check if extension is started.
     */
    public function started(string $name): bool;
}
