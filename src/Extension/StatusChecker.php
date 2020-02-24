<?php

namespace Orchestra\Contracts\Extension;

interface StatusChecker
{
    /**
     * Check current mode is equal given $mode.
     */
    public function is(string $mode): bool;

    /**
     * Check current mode is not equal given $mode.
     */
    public function isNot(string $mode): bool;

    /**
     * Get current mode.
     */
    public function mode(): string;
}
