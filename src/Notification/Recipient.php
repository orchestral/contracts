<?php

namespace Orchestra\Contracts\Notification;

interface Recipient
{
    /**
     * Get the e-mail address where notification are sent.
     */
    public function getRecipientEmail(): string;

    /**
     * Get the fullname where notification are sent.
     */
    public function getRecipientName(): string;
}
