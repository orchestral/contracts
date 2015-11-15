<?php namespace Orchestra\Contracts\Authorization;

use Orchestra\Contracts\Memory\Provider;

interface Factory
{
    /**
     * Initiate a new ACL Container instance.
     *
     * @param  string  $name
     * @param  \Orchestra\Contracts\Memory\Provider  $memory
     *
     * @return \Orchestra\Contracts\Authorization\Authorization
     */
    public function make($name = null, Provider $memory = null);

    /**
     * Register an ACL Container instance with Closure.
     *
     * @param  string  $name
     * @param  \Closure  $callback
     *
     * @return \Orchestra\Contracts\Authorization\Authorization
     */
    public function register($name, $callback = null);

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
    public function all();

    /**
     * Get ACL instance by name.
     *
     * @param  string  $name
     *
     * @return \Orchestra\Contracts\Authorization\Authorization
     */
    public function get($name);
}
