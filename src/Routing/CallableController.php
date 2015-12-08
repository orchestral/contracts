<?php namespace Orchestra\Contracts\Routing;

/**
 * @deprecated since 3.2.0
 */
interface CallableController
{
    /**
     * Execute an action on the controller.
     *
     * @param  string  $method
     * @param  array   $parameters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function callAction($method, $parameters);
}
