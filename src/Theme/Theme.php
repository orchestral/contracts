<?php

namespace Orchestra\Contracts\Theme;

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
     * @param  string|null  $theme
     *
     * @return void
     */
    public function setTheme(?string $theme): void;

    /**
     * Get the theme.
     *
     * @return string
     */
    public function getTheme(): string;

    /**
     * Boot and Load theme starter files.
     *
     * @return bool
     */
    public function boot(): bool;

    /**
     * Resolving the theme.
     *
     * @return bool
     */
    public function resolving(): bool;

    /**
     * Get theme path.
     *
     * @return string
     */
    public function getThemePath(): string;

    /**
     * Get cascading theme path.
     *
     * @return string
     */
    public function getCascadingThemePath(): string;

    /**
     * Get theme paths.
     *
     * @return array
     */
    public function getThemePaths(): array;

    /**
     * Get available theme paths.
     *
     * @return array
     */
    public function getAvailableThemePaths(): array;

    /**
     * URL helper for the theme.
     *
     * @param  string  $url
     *
     * @return string
     */
    public function to(string $url = ''): string;

    /**
     * Relative URL helper for theme.
     *
     * @param  string  $url
     *
     * @return string
     */
    public function asset(string $url = ''): string;
}
