<?php

namespace Orchestra\Contracts\Publisher;

interface Publisher
{
    /**
     * Publish extension.
     */
    public function extension(string $name): bool;

    /**
     * Publish Orchestra Platform.
     */
    public function foundation(): bool;
}
