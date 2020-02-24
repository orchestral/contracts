<?php

namespace Orchestra\Contracts\Notification;

interface Receipt
{
    /**
     * Return true when all e-mail has been sent.
     */
    public function sent(): bool;

    /**
     * Return true if any of the e-mail failed to be sent.
     */
    public function failed(): bool;

    /**
     * Get list of failed email recipient.
     */
    public function failures(): array;

    /**
     * Set whether or not e-mail is sent via queue/delayed.
     *
     * @return $this
     */
    public function usingQueue(bool $usingQueue = false);

    /**
     * Get if e-mail is queued/delayed.
     */
    public function isQueued(): bool;
}
