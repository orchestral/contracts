<?php

namespace Orchestra\Contracts\Html\Form;

use Illuminate\Support\Fluent;

interface Control
{
    /**
     * Get templates.
     *
     * @return array
     */
    public function getTemplates(): array;

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
     * @return callable
     */
    public function generate(string $type): callable;

    /**
     * Build field by type.
     *
     * @param  string  $type
     * @param  mixed  $row
     * @param  \Illuminate\Support\Fluent  $control
     *
     * @return \Orchestra\Contracts\Html\Form\Field
     */
    public function buildFieldByType(string $type, $row, Fluent $control): Field;

    /**
     * Build data.
     *
     * @param  string  $type
     * @param  mixed  $row
     * @param  \Illuminate\Support\Fluent  $control
     *
     * @return \Orchestra\Contracts\Html\Form\Field
     */
    public function buildFluentData(string $type, $row, Fluent $control): Field;

    /**
     * Render the field.
     *
     * @param  array  $templates
     * @param  \Illuminate\Support\Fluent  $data
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public function render(array $templates, Fluent $data): string;
}
