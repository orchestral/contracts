<?php

namespace Orchestra\Contracts\Authorization;

use Orchestra\Contracts\Memory\Provider;

interface Factory
{
    /**
     * Initiate a new ACL Container instance.
     */
    public function make(string $name = null, ?Provider $memory = null): Authorization;

    /**
     * Register an ACL Container instance with Closure.
     *
     * @param  string|callable  $name
     */
    public function register($name, ?callable $callback = null): Authorization;

    /**
     * Shutdown/finish all ACL.
     *
     * @return $this
     */
    public function finish();

    /**
     * Get all ACL instances.
     */
    public function all(): array;

    /**
     * Get ACL instance by name.
     */
    public function get(string $name): ?Authorization;
}
