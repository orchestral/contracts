<?php namespace Orchestra\Contracts\Extension;

interface Finder
{
    /**
     * Add a new path to finder.
     *
     * @param  string  $path
     *
     * @return $this
     */
    public function addPath($path);

    /**
     * Detect available extensions.
     *
     * @return \Illuminate\Support\Collection|array
     */
    public function detect();

    /**
     * Register the extension.
     *
     * @param  string  $name
     * @param  string  $path
     *
     * @return bool
     */
    public function registerExtension($name, $path);
}
