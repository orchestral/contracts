<?php namespace Orchestra\Contracts\Notification;

interface Message
{
    /**
     * Get data.
     *
     * @return array
     */
    public function getData();

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject();

    /**
     * Get view.
     *
     * @return string|array
     */
    public function getView();
}
