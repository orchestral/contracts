<?php

namespace Orchestra\Contracts\Extension;

interface UrlGenerator
{
    /**
     * Get route domain.
     */
    public function domain(bool $forceBase = false): ?string;

    /**
     * Get route group.
     */
    public function group(bool $forceBase = false): array;

    /**
     * Determine if the current request URI matches a pattern.
     */
    public function is(string $pattern): bool;

    /**
     * Get the current path info for the request.
     */
    public function path(): string;

    /**
     * Get route prefix.
     */
    public function prefix(bool $forceBase = false): string;

    /**
     * Get route root.
     */
    public function root(): string;

    /**
     * Get route to.
     */
    public function to(string $to): string;
}
