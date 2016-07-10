<?php

namespace Orchestra\Contracts\Installation;

interface Requirement
{
    /**
     * Add requirement specification.
     *
     * @param  \Orchestra\Contracts\Installation\Specification  $specification
     *
     * @return $this
     */
    public function add(Specification $specification);

    /**
     * Check all requirement.
     *
     * @return bool
     */
    public function check();

    /**
     * Get rules.
     *
     * @return array
     */
    public function items();

    /**
     * Get installable status.
     *
     * @return bool
     */
    public function isInstallable();
}
