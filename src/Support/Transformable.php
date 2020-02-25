<?php

namespace Orchestra\Contracts\Support;

interface Transformable
{
    /**
     * Transform each attribute in the model using a callback.
     *
     * @return \Illuminate\Support\Fluent
     */
    public function transform(callable $callback);
}
