<?php

namespace Orchestra\Contracts\Html\Form;

interface Fieldset
{
    /**
     * Append a new control to the form.
     *
     * <code>
     *      // add a new control using just field name
     *      $fieldset->control('input:text', 'username');
     *
     *      // add a new control using a label (header title) and field name
     *      $fieldset->control('input:email', 'E-mail Address', 'email');
     *
     *      // add a new control by using a field name and closure
     *      $fieldset->control('input:text', 'fullname', function ($control)
     *      {
     *          $control->label = 'User Name';
     *
     *          // this would output a read-only output instead of form.
     *          $control->field = function ($row) {
     *              return $row->first_name.' '.$row->last_name;
     *          };
     *      });
     * </code>
     *
     * @param  string  $type
     * @param  mixed   $name
     * @param  mixed   $callback
     *
     * @return \Orchestra\Contracts\Html\Form\Field
     */
    public function control($type, $name, $callback = null);

    /**
     * Set Fieldset Legend name.
     *
     * <code>
     *     $fieldset->legend('User Information');
     * </code>
     *
     * @param  string  $name
     *
     * @return mixed
     */
    public function legend($name = null);

    /**
     * Get fieldset name.
     *
     * @return string
     */
    public function getName();
}
