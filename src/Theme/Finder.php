<?php

namespace Orchestra\Contracts\Theme;

interface Finder
{
    /**
     * Detect available themes.
     *
     * @throws \RuntimeException
     *
     * @return \Illuminate\Support\Collection
     */
    public function detect();
}
