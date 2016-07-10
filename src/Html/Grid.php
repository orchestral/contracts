<?php

namespace Orchestra\Contracts\Html;

interface Grid
{
    /**
     * Add or append Grid attributes.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     *
     * @return array|null
     */
    public function attributes($key = null, $value = null);

    /**
     * Set fieldset layout (view).
     *
     * <code>
     *      // use default horizontal layout
     *      $fieldset->layout('horizontal');
     *
     *      // use default vertical layout
     *      $fieldset->layout('vertical');
     *
     *      // define fieldset using custom view
     *      $fieldset->layout('path.to.view');
     * </code>
     *
     * @param  string  $name
     * @param  array   $data
     *
     * @return $this
     */
    public function layout($name, array $data = []);

    /**
     * Allow column overwriting.
     *
     * @param  string      $name
     * @param  mixed|null  $callback
     *
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     *
     * @return \Illuminate\Support\Fluent
     */
    public function of($name, $callback = null);

    /**
     * Forget meta value.
     *
     * @param  string  $key
     *
     * @return void
     */
    public function forget($key);

    /**
     * Get meta value.
     *
     * @param  string  $key
     * @param  mixed|null  $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Set meta value.
     *
     * @param  string  $key
     * @param  mixed   $value
     *
     * @return array
     */
    public function set($key, $value);
}
