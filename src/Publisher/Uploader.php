<?php

namespace Orchestra\Contracts\Publisher;

interface Uploader
{
    /**
     * Connect to the service.
     *
     * @param  array  $config
     *
     * @return void
     */
    public function connect(array $config = []);

    /**
     * Upload the file.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function upload(string $name): bool;

    /**
     * Verify that the driver is connected to a service.
     *
     * @return bool
     */
    public function connected(): bool;
}
