<?php

namespace Orchestra\Contracts\Notification;

interface Message
{
    /**
     * Get data.
     */
    public function getData(): array;

    /**
     * Get subject.
     */
    public function getSubject(): string;

    /**
     * Get view.
     *
     * @return \Illuminate\Contracts\Mail\Mailable|string|array
     */
    public function getView();
}
