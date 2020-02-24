<?php

namespace Orchestra\Contracts\Config;

interface PackageRepository
{
    /**
     * Register a package for cascading configuration.
     */
    public function package(string $package, string $hint, ?string $namespace = null): void;
}
