<?php namespace Orchestra\Contracts\Extension;

interface StatusChecker
{
    /**
     * Determine whether current request is in safe mode or not.
     *
     * @return bool
     */
    public function check();

    /**
     * Get current mode.
     *
     * @return string
     */
    public function mode();
}
