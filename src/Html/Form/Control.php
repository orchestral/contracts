<?php

namespace Orchestra\Contracts\Html\Form;

use Illuminate\Support\Fluent;

interface Control
{
    /**
     * Get templates.
     */
    public function getTemplates(): array;

    /**
     * Set templates.
     *
     * @return $this
     */
    public function setTemplates(array $templates = []);

    /**
     * Generate Field.
     */
    public function generate(string $type): callable;

    /**
     * Build field by type.
     *
     * @param  mixed  $row
     */
    public function buildFieldByType(string $type, $row, Fluent $control): Field;

    /**
     * Build data.
     *
     * @param  mixed  $row
     */
    public function buildFluentData(string $type, $row, Fluent $control): Field;

    /**
     * Render the field.
     *
     * @throws \InvalidArgumentException
     */
    public function render(array $templates, Fluent $data): string;
}
