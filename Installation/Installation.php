<?php namespace Orchestra\Contracts\Installation;

interface Installation
{
    /**
     * Boot installer files.
     *
     * @return void
     */
    public function bootInstallerFiles();

    /**
     * Migrate Orchestra Platform schema.
     *
     * @return bool
     */
    public function migrate();

    /**
     * Create administrator account.
     *
     * @param  array  $input
     * @param  bool   $allowMultiple
     *
     * @return bool
     */
    public function createAdmin($input, $allowMultiple = true);
}
