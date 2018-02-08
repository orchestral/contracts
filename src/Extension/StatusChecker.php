<?php

namespace Orchestra\Contracts\Extension;

interface StatusChecker
{
    /**
     * Check current mode is equal given $mode.
     *
     * @param  string  $mode
     *
     * @return bool
     */
    public function is(string $mode): bool;

    /**
     * Check current mode is not equal given $mode.
     *
     * @param  string  $mode
     *
     * @return bool
     */
    public function isNot(string $mode): bool;

    /**
     * Get current mode.
     *
     * @return string
     */
    public function mode(): string;
}
