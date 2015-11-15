<?php namespace Orchestra\Contracts\Publisher;

interface Uploader
{
    /**
     * Get service connection instance.
     *
     * @return object
     */
    public function getConnection();

    /**
     * Get service connection instance.
     *
     * @param  object  $client
     *
     * @return void
     */
    public function setConnection($client);

    /**
     * Connect to the service.
     *
     * @param  array  $config
     *
     * @return void
     */
    public function connect($config = []);

    /**
     * Upload the file.
     *
     * @param  string  $name
     *
     * @return bool
     */
    public function upload($name);

    /**
     * Verify that the driver is connected to a service.
     *
     * @return bool
     */
    public function connected();
}
