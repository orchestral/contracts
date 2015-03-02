<?php namespace Orchestra\Contracts\Extension\Listener;

use Illuminate\Support\Fluent;

interface Deactivator extends Extension
{
    /**
     * Response when extension deactivation has succeed.
     *
     * @param  \Illuminate\Support\Fluent  $extension
     *
     * @return mixed
     */
    public function deactivationHasSucceed(Fluent $extension);
}
