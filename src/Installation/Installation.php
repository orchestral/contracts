<?php

namespace Orchestra\Contracts\Installation;

interface Installation
{
    /**
     * Boot installer files.
     *
     * @return void
     */
    public function bootInstallerFiles(): void;

    /**
     * Boot installer files for testing.
     *
     * @return void
     */
    public function bootInstallerFilesForTesting(): void;

    /**
     * Migrate Orchestra Platform schema.
     *
     * @return bool
     */
    public function migrate(): bool;

    /**
     * Create administrator account.
     *
     * @param  array  $input
     * @param  bool   $allowMultiple
     *
     * @return bool
     */
    public function make(array $input, bool $allowMultiple = true): bool;

    /**
     * Validate request.
     *
     * @param  array  $input
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return bool
     */
    public function validate(array $input): bool;
}
