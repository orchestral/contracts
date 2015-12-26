<?php namespace Orchestra\Contracts\Html;

use Closure;

interface Builder
{
    /**
     * Extend decoration.
     *
     * @param  \Closure  $callback
     *
     * @return $this
     */
    public function extend(Closure $callback = null);
}
