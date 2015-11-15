<?php namespace Orchestra\Contracts\Notification;

interface Recipient
{
    /**
     * Get the e-mail address where notification are sent.
     *
     * @return string
     */
    public function getRecipientEmail();

    /**
     * Get the fullname where notification are sent.
     *
     * @return string
     */
    public function getRecipientName();
}
