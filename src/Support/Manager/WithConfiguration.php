<?php

namespace Orchestra\Contracts\Support\Manager;

interface WithConfiguration
{
    /**
     * Get configuration values.
     *
     * @return array
     */
    public function getConfiguration(): array;

    /**
     * Set configuration.
     *
     * @param  array  $configurations
     *
     * @return $this
     */
    public function setConfiguration(array $configurations);
}
