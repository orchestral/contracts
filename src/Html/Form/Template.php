<?php

namespace Orchestra\Contracts\Html\Form;

interface Template
{
    /**
     * Button template.
     *
     * @return string
     */
    public function button(Field $field);

    /**
     * Checkbox template.
     *
     * @return string
     */
    public function checkbox(Field $field);

    /**
     * Checkboxes template.
     *
     * @return string
     */
    public function checkboxes(Field $field);

    /**
     * File template.
     *
     * @return string
     */
    public function file(Field $field);

    /**
     * Input template.
     *
     * @return string
     */
    public function input(Field $field);

    /**
     * Password template.
     *
     * @return string
     */
    public function password(Field $field);

    /**
     * Radio template.
     *
     * @return string
     */
    public function radio(Field $field);

    /**
     * Select template.
     *
     * @return string
     */
    public function select(Field $field);

    /**
     * Textarea template.
     *
     * @return string
     */
    public function textarea(Field $field);
}
