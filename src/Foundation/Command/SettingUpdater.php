<?php

namespace Orchestra\Contracts\Foundation\Command;

use Orchestra\Contracts\Foundation\Listener\SettingUpdater as Listener;

interface SettingUpdater
{
    /**
     * View setting page.
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update setting.
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
