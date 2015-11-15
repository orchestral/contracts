<?php namespace Orchestra\Contracts\Authorization;

interface Authorization
{
    /**
     * Assign single or multiple $roles + $actions to have access.
     *
     * @param  string|array  $roles
     * @param  string|array  $actions
     * @param  bool  $allow
     *
     * @return $this
     */
    public function allow($roles, $actions, $allow = true);

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access.
     *
     * @param  string  $action
     *
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    public function can($action);

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access if the action exist.
     *
     * @param  string  $action     A string of action name
     *
     * @return bool
     */
    public function canIf($action);

    /**
     * Verify whether given roles has sufficient roles to access the
     * actions based on available type of access.
     *
     * @param  string|array  $roles
     * @param  string  $action
     *
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    public function check($roles, $action);

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
