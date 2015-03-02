<?php namespace Orchestra\Contracts\Notification;

interface Receipt
{
    /**
     * Return true when all e-mail has been sent.
     *
     * @return bool
     */
    public function sent();

    /**
     * Return true if any of the e-mail failed to be sent.
     *
     * @return bool
     */
    public function failed();

    /**
     * Get list of failed email recipient.
     *
     * @return array
     */
    public function failures();

    /**
     * Set whether or not e-mail is sent via queue/delayed.
     *
     * @param  bool  $usingQueue
     *
     * @return $this
     */
    public function usingQueue($usingQueue = false);

    /**
     * Get if e-mail is queued/delayed.
     *
     * @return bool
     */
    public function isQueued();
}
