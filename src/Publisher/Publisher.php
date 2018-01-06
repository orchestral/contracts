<?php

namespace Orchestra\Contracts\Publisher;

interface Publisher
{
    /**
     * Publish extension.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function extension(string $name): bool;

    /**
     * Publish Orchestra Platform.
     *
     * @return bool
     */
    public function foundation(): bool;
}
