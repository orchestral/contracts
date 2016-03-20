<?php

namespace Orchestra\Contracts\Foundation;

use Illuminate\Contracts\Foundation\Application as ApplicationContract;

interface Application extends ApplicationContract
{
    /**
     * Get the path to the cached extension.json file.
     *
     * @return string
     */
    public function getCachedExtensionServicesPath();
}
