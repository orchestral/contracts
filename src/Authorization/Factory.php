<?php

namespace Orchestra\Contracts\Authorization;

use Orchestra\Contracts\Memory\Provider;

interface Factory
{
    /**
     * Initiate a new ACL Container instance.
     *
     * @param  string  $name
     * @param  \Orchestra\Contracts\Memory\Provider|null  $memory
     *
     * @return \Orchestra\Contracts\Authorization\Authorization
     */
    public function make(string $name = null, ?Provider $memory = null): Authorization;

    /**
     * Register an ACL Container instance with Closure.
     *
     * @param  string  $name
     * @param  callable|null  $callback
     *
     * @return \Orchestra\Contracts\Authorization\Authorization
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
     *
     * @return array
     */
    public function all(): array;

    /**
     * Get ACL instance by name.
     *
     * @param  string  $name
     *
     * @return \Orchestra\Contracts\Authorization\Authorization|null
     */
    public function get(string $name): ?Authorization;
}
