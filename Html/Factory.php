<?php namespace Orchestra\Contracts\Html;

use Closure;

interface Factory
{
    /**
     * Create a new Builder instance.
     *
     * @param  \Closure|null    $callback
     *
     * @return \Orchestra\Contracts\Html\Builder
     */
    public function make(Closure $callback = null);

    /**
     * Create a new builder instance of a named builder.
     *
     * @param  string   $name
     * @param  \Closure $callback
     *
     * @return \Orchestra\Contracts\Html\Builder
     */
    public function of($name, Closure $callback = null);
}
