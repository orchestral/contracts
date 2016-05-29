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
     * Is specification errors.
     *
     * @return array
     */
    public function errors();

    /**
     * Is specification optional.
     *
     * @return bool
     */
    public function optional();
}
