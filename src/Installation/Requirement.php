<?php

namespace Orchestra\Contracts\Installation;

interface Requirement
{
    /**
     * Add requirement specification.
     *
     * @return $this
     */
    public function add(Specification $specification);

    /**
     * Check all requirement.
     */
    public function check(): bool;

    /**
     * Get rules.
     */
    public function items(): iterable;

    /**
     * Get installable status.
     */
    public function isInstallable(): bool;
}
