<?php namespace Orchestra\Contracts\Extension\Listener;

interface Viewer
{
    /**
     * Response for list of extensions viewer.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function showExtensions(array $data);
}
