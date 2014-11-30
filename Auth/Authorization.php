<?php namespace Orchestra\Contracts\Auth;

interface Authorization
{
    /**
     * Assign single or multiple $roles + $actions to have access.
     *
     * @param  string|array  $roles      A string or an array of roles
     * @param  string|array  $actions    A string or an array of action name
     * @param  bool          $allow
     * @return $this
     */
    public function allow($roles, $actions, $allow = true);

    /**
     * Verify whether current user has sufficient roles to access the
     * actions based on available type of access.
     *
     * @param  string  $action     A string of action name
     * @return bool
     */
    public function can($action);

    /**
     * Verify whether given roles has sufficient roles to access the
     * actions based on available type of access.
     *
     * @param  string|array  $roles      A string or an array of roles
     * @param  string        $action     A string of action name
     * @return bool
     * @throws \InvalidArgumentException
     */
    public function check($roles, $action);

    /**
     * Shorthand function to deny access for single or multiple
     * $roles and $actions.
     *
     * @param  string|array  $roles      A string or an array of roles
     * @param  string|array  $actions    A string or an array of action name
     * @return $this
     */
    public function deny($roles, $actions);
}
