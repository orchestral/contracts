<?php

namespace Orchestra\Contracts\Extension\Listener;

interface Extension
{
    /**
     * Abort request when extension requirement mismatched.
     *
     * @return mixed
     */
    public function abortWhenRequirementMismatched();
}
