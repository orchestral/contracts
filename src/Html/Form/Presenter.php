<?php

namespace Orchestra\Contracts\Html\Form;

interface Presenter
{
    /**
     * Build form action URL.
     *
     * @param  string  $url
     *
     * @return string
     */
    public function handles($url);

    /**
     * Setup form layout.
     *
     * @return void
     */
    public function setupForm(Grid $form);
}
