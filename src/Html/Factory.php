<?php

namespace Orchestra\Contracts\Html;

interface Factory
{
    /**
     * Create a new Builder instance.
     *
     * @param  callable|null    $callback
     *
     * @return \Orchestra\Contracts\Html\Builder
     */
    public function make(callable $callback = null): Builder;

    /**
     * Create a new builder instance of a named builder.
     *
     * @param  string   $name
     * @param  \Closure $callback
     *
     * @return \Orchestra\Contracts\Html\Builder
     */
    public function of(string $name, callable $callback = null): Builder;
}
