<?php namespace Orchestra\Contracts\Installation;

interface Requirement
{
    /**
     * Check all requirement.
     *
     * @return bool
     */
    public function check();

    /**
     * Get checklist result.
     *
     * @return array
     */
    public function getChecklist();

    /**
     * Get installable status.
     *
     * @return bool
     */
    public function isInstallable();
}
