<?php namespace Orchestra\Contracts\Extension;

interface SafeMode
{
    /**
     * Determine whether current request is in safe mode or not.
     *
     * @return boolean
     */
    public function check();
}
