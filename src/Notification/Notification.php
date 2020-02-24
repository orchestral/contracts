<?php

namespace Orchestra\Contracts\Notification;

use Closure;

interface Notification
{
    /**
     * Send notification via API.
     */
    public function send(Recipient $user, Message $message, Closure $callback = null): Receipt;
}
