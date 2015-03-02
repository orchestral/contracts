<?php namespace Orchestra\Contracts\Extension\Listener;

use Illuminate\Support\Fluent;

interface Migrator
{
    /**
     * Response when extension migration has failed.
     *
     * @param  \Illuminate\Support\Fluent  $extension
     * @param  array  $errors
     *
     * @return mixed
     */
    public function migrationHasFailed(Fluent $extension, array $errors);

    /**
     * Response when extension migration has succeed.
     *
     * @param  \Illuminate\Support\Fluent  $extension
     *
     * @return mixed
     */
    public function migrationHasSucceed(Fluent $extension);
}
