<?php

namespace Orchestra\Contracts\Installation;

interface Specification
{
    /**
     * Get specification id.
     *
     * @return string
     */
    public function uid(): string;

    /**
     * Get specification title.
     *
     * @return string
     */
    public function title(): string;

    /**
     * Get specification description.
     *
     * @return string
     */
    public function description(): string;

    /**
     * Check specification requirement.
     *
     * @return bool
     */
    public function check(): bool;

    /**
     * Get specification error.
     *
     * @return array|null
     */
    public function error();

    /**
     * Is specification optional.
     *
     * @return bool
     */
    public function optional(): bool;
}
