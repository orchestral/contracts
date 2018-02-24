<?php

namespace Orchestra\Contracts\Notification;

interface Message
{
    /**
     * Get data.
     *
     * @return array
     */
    public function getData(): array;

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject(): string;

    /**
     * Get view.
     *
     * @return \Illuminate\Contracts\Mail\Mailable|string|array
     */
    public function getView();
}
