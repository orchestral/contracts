<?php

namespace Orchestra\Contracts\Installation;

interface Specification
{
    /**
     * Get specification id.
     */
    public function uid(): string;

    /**
     * Get specification title.
     */
    public function title(): string;

    /**
     * Get specification description.
     */
    public function description(): string;

    /**
     * Check specification requirement.
     */
    public function check(): bool;

    /**
     * Get specification error.
     *
     * @return array|string|null
     */
    public function error();

    /**
     * Is specification optional.
     */
    public function optional(): bool;
}
