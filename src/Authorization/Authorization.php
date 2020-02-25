<?php

namespace Orchestra\Contracts\Authorization;

interface Authorization
{
    /**
     * Assign single or multiple $roles + $actions to have access.
     *
     * @param  string|array  $roles
     * @param  string|array  $actions
     *
     * @return $this
     */
    public function allow($roles, $actions, bool $allow = true);

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access.
     *
     * @throws \InvalidArgumentException
     */
    public function can(string $action): bool;

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access if the action exist.
     *
     * @param  string  $action
     */
    public function canIf(string $action): bool;

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access.
     *
     * @param  \Orchestra\Contracts\Authorization\Authorizable  $user
     * @param  string  $action
     *
     * @throws \InvalidArgumentException
     */
    public function canAs(Authorizable $user, string $action): bool;

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access if the action exist.
     *
     * @param  string  $action
     */
    public function canIfAs(Authorizable $user, string $action): bool;

    /**
     * Verify whether given roles has sufficient roles to access the
     * actions based on available type of access.
     *
     * @param  string|array  $roles
     *
     * @throws \InvalidArgumentException
     */
    public function check($roles, string $action): bool;

    /**
     * Shorthand function to deny access for single or multiple
     * $roles and $actions.
     *
     * @param  string|array  $roles
     * @param  string|array  $actions
     *
     * @return $this
     */
    public function deny($roles, $actions);
}
