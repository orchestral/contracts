<?php namespace Orchestra\Contracts\Html\Form;

use Illuminate\Support\Fluent;

interface Control
{
    /**
     * Get templates.
     *
     * @return array
     */
    public function getTemplates();

    /**
     * Set templates.
     *
     * @param  array  $templates
     *
     * @return $this
     */
    public function setTemplates(array $templates = []);

    /**
     * Generate Field.
     *
     * @param  string  $type
     *
     * @return \Closure
     */
    public function generate($type);

    /**
     * Build field by type.
     *
     * @param  string  $type
     * @param  mixed  $row
     * @param  \Illuminate\Support\Fluent  $control
     *
     * @return \Illuminate\Support\Fluent
     */
    public function buildFieldByType($type, $row, Fluent $control);

    /**
     * Build data.
     *
     * @param  string  $type
     * @param  mixed  $row
     * @param  \Illuminate\Support\Fluent  $control
     *
     * @return \Illuminate\Support\Fluent
     */
    public function buildFluentData($type, $row, Fluent $control);

    /**
     * Render the field.
     *
     * @param  array  $templates
     * @param  \Illuminate\Support\Fluent  $data
     *
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function render($templates, Fluent $data);
}
