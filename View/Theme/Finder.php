<?php namespace Orchestra\Contracts\View\Theme;

interface Finder
{
    /**
     * Detect available themes.
     *
     * @return \Illuminate\Support\Collection
     * @throws \RuntimeException
     */
    public function detect();
}
