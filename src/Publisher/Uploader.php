<?php

namespace Orchestra\Contracts\Publisher;

interface Uploader
{
    /**
     * Connect to the service.
     *
     * @return void
     */
    public function connect(array $config = []);

    /**
     * Upload the file.
     */
    public function upload(string $name): bool;

    /**
     * Verify that the driver is connected to a service.
     */
    public function connected(): bool;
}
