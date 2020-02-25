<?php

namespace Orchestra\Contracts\Html;

interface Grid
{
    /**
     * Add or append Grid attributes.
     *
     * @param  string|array|null  $key
     * @param  mixed  $value
     *
     * @return mixed
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
     * @return $this
     */
    public function layout(string $name, array $data = []);

    /**
     * Allow column overwriting.
     *
     * @param  mixed|null  $callback
     *
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     *
     * @return \Illuminate\Support\Fluent
     */
    public function of(string $name, $callback = null);

    /**
     * Forget meta value.
     */
    public function forget(string $key): void;

    /**
     * Get meta value.
     *
     * @param  mixed|null  $default
     *
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * Set meta value.
     *
     * @param  mixed  $value
     *
     * @return array
     */
    public function set(string $key, $value);
}
