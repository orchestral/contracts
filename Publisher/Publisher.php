<?php namespace Orchestra\Contracts\Publisher;

interface Publisher
{
    /**
     * Publish extension.
     *
     * @param  string  $name
     *
     * @return void
     */
    public function extension($name);

    /**
     * Publish Orchestra Platform.
     *
     * @return void
     */
    public function foundation();
}
