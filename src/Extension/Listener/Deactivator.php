<?php

namespace Orchestra\Contracts\Extension\Listener;

use Illuminate\Support\Fluent;

interface Deactivator extends Extension
{
    /**
     * Response when extension deactivation has succeed.
     *
     * @return mixed
     */
    public function deactivationHasSucceed(Fluent $extension);
}
