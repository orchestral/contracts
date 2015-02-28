<?php namespace Orchestra\Contracts\Config;

interface PackageRepository
{
    /**
     * Register a package with custom file.
     *
     * @param  string  $package
     * @return void
     */
    public function file($package);

    /**
     * Register a package for cascading configuration.
     *
     * @param  string  $package
     * @param  string  $hint
     * @param  string  $namespace
     * @return void
     */
    public function package($package, $hint, $namespace = null);
}
