<?php

namespace Orchestra\Contracts\Installation;

interface Specification
{
    /**
     * Get specification id.
     *
     * @return string
     */
    public function uid();

    /**
     * Get specification title.
     *
     * @return string
     */
    public function title();

    /**
     * Get specification description.
     *
     * @return string
     */
    public function description();

    /**
     * Check specification requirement.
     *
     * @return bool
     */
    public function check();

    /**
     * Get specification error.
     *
     * @return array
     */
    public function error();

    /**
     * Is specification optional.
     *
     * @return bool
     */
    public function optional();
}
