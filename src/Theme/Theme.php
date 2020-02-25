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
     */
    public function setTheme(?string $theme): void;

    /**
     * Get the theme.
     */
    public function getTheme(): string;

    /**
     * Boot and Load theme starter files.
     */
    public function boot(): bool;

    /**
     * Resolving the theme.
     */
    public function resolving(): bool;

    /**
     * Get theme path.
     */
    public function getThemePath(): string;

    /**
     * Get cascading theme path.
     */
    public function getCascadingThemePath(): string;

    /**
     * Get theme paths.
     */
    public function getThemePaths(): array;

    /**
     * Get available theme paths.
     */
    public function getAvailableThemePaths(): array;

    /**
     * URL helper for the theme.
     */
    public function to(string $url = ''): string;

    /**
     * Relative URL helper for theme.
     */
    public function asset(string $url = ''): string;
}
