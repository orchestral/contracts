<?php

namespace Orchestra\Contracts\Authorization;

use Illuminate\Support\Collection;

interface Authorizable
{
    /**
     * Get roles name as an array.
     */
    public function getRoles(): Collection;
}
