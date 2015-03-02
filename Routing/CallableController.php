<?php namespace Orchestra\Contracts\Routing;

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
