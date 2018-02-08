<?php

namespace Orchestra\Contracts\Extension;

interface UrlGenerator
{
    /**
     * Get route domain.
     *
     * @param  bool  $forceBase
     *
     * @return string|null
     */
    public function domain(bool $forceBase = false): ?string;

    /**
     * Get route group.
     *
     * @param  bool  $forceBase
     *
     * @return array
     */
    public function group(bool $forceBase = false): array;

    /**
     * Determine if the current request URI matches a pattern.
     *
     * @param  string  $pattern
     *
     * @return bool
     */
    public function is(string $pattern): bool;

    /**
     * Get the current path info for the request.
     *
     * @return string
     */
    public function path(): string;

    /**
     * Get route prefix.
     *
     * @param  bool  $forceBase
     *
     * @return string
     */
    public function prefix(bool $forceBase = false): string;

    /**
     * Get route root.
     *
     * @return string
     */
    public function root(): string;

    /**
     * Get route to.
     *
     * @param  string  $to
     *
     * @return string
     */
    public function to(string $to): string;
}
