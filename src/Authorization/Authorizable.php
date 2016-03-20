<?php

namespace Orchestra\Contracts\Authorization;

interface Authorizable
{
    /**
     * Get roles name as an array.
     *
     * @return \Illuminate\Support\Collection|array
     */
    public function getRoles();
}
