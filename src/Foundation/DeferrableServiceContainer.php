<?php namespace Orchestra\Contracts\Foundation;

interface DeferrableServiceContainer
{
    /**
     * Get the application's deferred services.
     *
     * @return array
     */
    public function getDeferredServices();

    /**
     * Set the application's deferred services.
     *
     * @param  array  $services
     *
     * @return void
     */
    public function setDeferredServices(array $services);

    /**
     * Load and boot all of the remaining deferred providers.
     *
     * @return void
     */
    public function loadDeferredProviders();

    /**
     * Register a deferred provider and service.
     *
     * @param  string  $provider
     * @param  string  $service
     *
     * @return void
     */
    public function registerDeferredProvider($provider, $service = null);
}
