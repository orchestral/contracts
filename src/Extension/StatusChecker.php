<?php namespace Orchestra\Contracts\Extension;

interface StatusChecker
{
    /**
     * Check current mode is equal given $mode.
     *
     * @param  string  $mode
     *
     * @return bool
     */
    public function is($mode);

    /**
     * Check current mode is not equal given $mode.
     *
     * @param  string  $mode
     *
     * @return bool
     */
    public function isNot($mode);

    /**
     * Get current mode.
     *
     * @return string
     */
    public function mode();
}
