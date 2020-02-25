<?php

namespace Orchestra\Contracts\Extension\Listener;

interface Viewer
{
    /**
     * Response for list of extensions viewer.
     *
     * @return mixed
     */
    public function showExtensions(array $data);
}
