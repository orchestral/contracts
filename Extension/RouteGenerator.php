<?php namespace Orchestra\Contracts\Extension;

interface RouteGenerator
{
    /**
     * Get route domain.
     *
     * @param  boolean  $forceBase
     * @return string
     */
    public function domain($forceBase = false);

    /**
     * Determine if the current request URI matches a pattern.
     *
     * @param  string  $pattern
     * @return boolean
     */
    public function is($pattern);

    /**
     * Get the current path info for the request.
     *
     * @return string
     */
    public function path();

    /**
     * Get route prefix.
     *
     * @param  boolean  $forceBase
     * @return string
     */
    public function prefix($forceBase = false);

    /**
     * Get route root.
     *
     * @return string
     */
    public function root();

    /**
     * Get route to.
     *
     * @param  string   $to
     * @return string
     */
    public function to($to);
}
