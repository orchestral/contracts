<?php

namespace Orchestra\Contracts\Theme;

use Illuminate\Support\Collection;

interface Finder
{
    /**
     * Detect available themes.
     *
     * @throws \RuntimeException
     */
    public function detect(): Collection;
}
