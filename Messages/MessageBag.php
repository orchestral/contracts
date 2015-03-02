<?php namespace Orchestra\Contracts\Messages;

use Closure;
use Illuminate\Contracts\Support\MessageBag as MessageBagContract;

interface MessageBag extends MessageBagContract
{
    /**
     * Extend Messages instance from session.
     *
     * @param  \Closure  $callback
     *
     * @return static
     */
    public function extend(Closure $callback);

    /**
     * Retrieve Message instance from Session, the data should be in
     * serialize, so we need to unserialize it first.
     *
     * @return $this
     */
    public function retrieve();

    /**
     * Store current instance.
     *
     * @return void
     */
    public function save();

    /**
     * Compile the instance into serialize.
     *
     * @return string  serialize of this instance
     */
    public function serialize();
}
