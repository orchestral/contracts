<?php namespace Orchestra\Contracts\Theme;

interface Theme
{
    /**
     * Start theme engine, this should be called from application booted
     * or whenever we need to overwrite current active theme per request.
     *
     * @return $this
     */
    public function initiate();

    /**
     * Set the theme, this would also load the theme manifest.
     *
     * @param  string  $theme
     *
     * @return void
     */
    public function setTheme($theme);

    /**
     * Get the theme.
     *
     * @return string
     */
    public function getTheme();

    /**
     * Boot and Load theme starter files.
     *
     * @return bool
     */
    public function boot();

    /**
     * Resolving the theme.
     *
     * @return bool
     */
    public function resolving();

    /**
     * Get theme path.
     *
     * @return string
     */
    public function getThemePath();

    /**
     * Get cascading theme path.
     *
     * @return string
     */
    public function getCascadingThemePath();

    /**
     * Get theme paths.
     *
     * @return array
     */
    public function getThemePaths();

    /**
     * Get available theme paths.
     *
     * @return array
     */
    public function getAvailableThemePaths();

    /**
     * URL helper for the theme.
     *
     * @param  string  $url
     *
     * @return string
     */
    public function to($url = '');

    /**
     * Relative URL helper for theme.
     *
     * @param  string  $url
     *
     * @return string
     */
    public function asset($url = '');
}
