<?php

namespace Orchestra\Contracts\Html;

interface Builder
{
    /**
     * Extend decoration.
     *
     * @param  callable  $callback
     *
     * @return $this
     */
    public function extend(callable $callback = null);
}
