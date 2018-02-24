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
    public function check(): bool;

    /**
     * Get rules.
     *
     * @return iterable
     */
    public function items(): iterable;

    /**
     * Get installable status.
     *
     * @return bool
     */
    public function isInstallable(): bool;
}
