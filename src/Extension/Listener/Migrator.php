<?php

namespace Orchestra\Contracts\Extension\Listener;

use Illuminate\Support\Fluent;

interface Migrator
{
    /**
     * Response when extension migration has failed.
     *
     * @return mixed
     */
    public function migrationHasFailed(Fluent $extension, array $errors);

    /**
     * Response when extension migration has succeed.
     *
     * @return mixed
     */
    public function migrationHasSucceed(Fluent $extension);
}
