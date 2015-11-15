<?php namespace Orchestra\Contracts\Config;

interface PackageRepository
{
    /**
     * Register a package for cascading configuration.
     *
     * @param  string  $package
     * @param  string  $hint
     * @param  string  $namespace
     *
     * @return void
     */
    public function package($package, $hint, $namespace = null);
}
