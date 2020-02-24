<?php

namespace Orchestra\Contracts\Html;

interface Factory
{
    /**
     * Create a new Builder instance.
     */
    public function make(callable $callback = null): Builder;

    /**
     * Create a new builder instance of a named builder.
     */
    public function of(string $name, callable $callback = null): Builder;
}
