<?php

namespace Orchestra\Contracts\Html;

interface Builder
{
    /**
     * Extend decoration.
     *
     * @return $this
     */
    public function extend(callable $callback = null);
}
