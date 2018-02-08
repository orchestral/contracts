<?php

namespace Orchestra\Contracts\Authorization;

use Illuminate\Support\Collection;

interface Authorizable
{
    /**
     * Get roles name as an array.
     *
     * @return \Illuminate\Support\Collection
     */
    public function getRoles(): Collection;
}
