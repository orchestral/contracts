<?php

namespace Orchestra\Contracts\Auth;

interface Guard
{
    /**
     * Get the current user's roles of the application.
     *
     * If the user is a guest, empty array should be returned.
     *
     * @return \Illuminate\Support\Collection
     */
    public function roles();

    /**
     * Determine if current user has the given role.
     *
     * @param  string|array  $roles
     *
     * @return bool
     */
    public function is($roles);
}
