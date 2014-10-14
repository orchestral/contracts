<?php namespace Orchestra\Contracts\Extension;

interface Factory
{
    /**
     * Activate an extension.
     *
     * @param  string   $name
     * @return boolean
     */
    public function activate($name);

    /**
     * Check whether an extension is active.
     *
     * @param  string   $name
     * @return boolean
     */
    public function activated($name);

    /**
     * Check whether an extension is available.
     *
     * @param  string   $name
     * @return boolean
     */
    public function available($name);

    /**
     * Boot active extensions.
     *
     * @return \Orchestra\Extension\Factory
     */
    public function boot();

    /**
     * Deactivate an extension.
     *
     * @param  string   $name
     * @return bool
     */
    public function deactivate($name);

    /**
     * Detect all extensions.
     *
     * @return \Illuminate\Support\Collection|array
     */
    public function detect();

    /**
     * Get extension finder.
     *
     * @return \Orchestra\Contracts\Extension\Finder
     */
    public function finder();

    /**
     * Shutdown all extensions.
     *
     * @return static
     */
    public function finish();

    /**
     * Get an option for a given extension.
     *
     * @param  string   $name
     * @param  string   $option
     * @param  mixed    $default
     * @return mixed
     */
    public function option($name, $option, $default = null);

    /**
     * Check whether an extension has a writable public asset.
     *
     * @param  string   $name
     * @return bool
     */
    public function permission($name);

    /**
     * Publish an extension.
     *
     * @param  string
     * @return void
     */
    public function publish($name);

    /**
     * Reset extension.
     *
     * @param  string   $name
     * @return bool
     */
    public function reset($name);

    /**
     * Get extension route handle.
     *
     * @param  string   $name
     * @param  string   $default
     * @return \Orchestra\Contracts\Extension\RouteGenerator
     */
    public function route($name, $default = '/');

    /**
     * Check if extension is started.
     *
     * @param  string   $name
     * @return bool
     */
    public function started($name);
}
