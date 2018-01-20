<?php

namespace Orchestra\Contracts\Theme;

use Illuminate\Support\Collection;

interface Finder
{
    /**
     * Detect available themes.
     *
     * @throws \RuntimeException
     *
     * @return \Illuminate\Support\Collection
     */
    public function detect(): Collection;
}
