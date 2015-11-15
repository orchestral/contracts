<?php namespace Orchestra\Contracts\Html;

use Closure;
use Illuminate\Contracts\Support\Renderable;

interface Builder extends Renderable
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
