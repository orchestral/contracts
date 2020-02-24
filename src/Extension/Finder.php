<?php

namespace Orchestra\Contracts\Extension;

use Illuminate\Support\Collection;

interface Finder
{
    /**
     * Add a new path to finder.
     *
     * @return $this
     */
    public function addPath(string $path);

    /**
     * Detect available extensions.
     */
    public function detect(): Collection;

    /**
     * Register the extension.
     */
    public function registerExtension(string $name, string $path): bool;
}
