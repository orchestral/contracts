<?php namespace Orchestra\Contracts\Foundation\Command;

use Orchestra\Contracts\Foundation\Listener\SettingUpdater as Listener;

interface SettingUpdater
{
    /**
     * View setting page.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\SettingUpdater  $listener
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update setting.
     *
     * @param  \Orchestra\Contracts\Foundation\Listener\SettingUpdater  $listener
     * @param  array $input
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
