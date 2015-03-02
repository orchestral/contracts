<?php namespace Orchestra\Contracts\Extension\Listener;

use Illuminate\Support\Fluent;

interface Activator extends Extension
{
    /**
     * Response when extension activation has failed.
     *
     * @param  \Illuminate\Support\Fluent  $extension
     * @param  array  $errors
     *
     * @return mixed
     */
    public function activationHasFailed(Fluent $extension, array $errors);

    /**
     * Response when extension activation has succeed.
     *
     * @param  \Illuminate\Support\Fluent  $extension
     *
     * @return mixed
     */
    public function activationHasSucceed(Fluent $extension);
}
