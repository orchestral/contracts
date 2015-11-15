<?php namespace Orchestra\Contracts\Theme;

interface Finder
{
    /**
     * Detect available themes.
     *
     * @return \Illuminate\Support\Collection
     *
     * @throws \RuntimeException
     */
    public function detect();
}
