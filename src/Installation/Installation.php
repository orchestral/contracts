<?php

namespace Orchestra\Contracts\Installation;

interface Installation
{
    /**
     * Boot installer files.
     */
    public function bootInstallerFiles(): void;

    /**
     * Migrate Orchestra Platform schema.
     */
    public function migrate(): bool;

    /**
     * Create administrator account.
     */
    public function make(array $input, bool $allowMultiple = true): void;

    /**
     * Validate request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function validate(array $input): bool;
}
