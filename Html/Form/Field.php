<?php namespace Orchestra\Contracts\Html\Form;

interface Field
{
    /**
     * Get value of column.
     *
     * @param  mixed   $row
     * @param  mixed   $control
     * @param  array   $attributes
     * @return string
     */
    public function getField($row, $control, array $attributes = []);
}
