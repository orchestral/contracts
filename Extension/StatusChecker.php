<?php namespace Orchestra\Contracts\Extension;

interface StatusChecker
{
    /**
     * Check current mode.
     *
     * @return bool
     */
    public function is($mode);

    /**
     * Get current mode.
     *
     * @return string
     */
    public function mode();
}
