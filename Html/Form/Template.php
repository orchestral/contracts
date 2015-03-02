<?php namespace Orchestra\Contracts\Html\Form;

interface Template
{
    /**
     * Button template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function button(Field $field);

    /**
     * Checkbox template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function checkbox(Field $field);

    /**
     * Checkboxes template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function checkboxes(Field $field);

    /**
     * File template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function file(Field $field);

    /**
     * Input template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function input(Field $field);

    /**
     * Password template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function password(Field $field);

    /**
     * Radio template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function radio(Field $field);

    /**
     * Select template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function select(Field $field);

    /**
     * Textarea template.
     *
     * @param  \Orchestra\Contracts\Html\Form\Field  $field
     *
     * @return string
     */
    public function textarea(Field $field);
}
