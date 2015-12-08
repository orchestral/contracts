<?php namespace Orchestra\Contracts\Routing;

/**
 * @deprecated since 3.2.0
 */
interface StackableController
{
    /**
     * Register middleware on the controller.
     *
     * @param  mixed  $middleware
     *
     * @return void
     */
    public function middleware($middleware);

    /**
     * Get the middleware assigned to the controller.
     *
     * @return array
     */
    public function getMiddleware();
}
