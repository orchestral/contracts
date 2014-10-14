<?php namespace Orchestra\Contracts\Notification;

use Closure;

interface Notification
{
    /**
     * Send notification via API.
     *
     * @param  \Orchestra\Contracts\Notification\Recipient  $user
     * @param  \Orchestra\Contracts\Notification\Message  $message
     * @param  \Closure  $callback
     * @return \Orchestra\Contracts\Notification\Receipt
     */
    public function send(Recipient $user, Message $message, Closure $callback = null);
}
