<?php namespace Orchestra\Contracts\Html\Form;

use Closure;
use Illuminate\Database\Eloquent\Model;
use Orchestra\Contracts\Html\Grid as GridContract;

interface Grid extends GridContract
{
    /**
     * Attach data.
     *
     * <code>
     *      // assign a data
     *      $form->with(DB::table('users')->get());
     * </code>
     *
     * @param  array|\stdClass|\Illuminate\Database\Eloquent\Model|null  $data
     *
     * @return mixed
     */
    public function with($data = null);

    /**
     * Attach raw data instead of assigning a model.
     *
     * @param  array|\Illuminate\Support\Fluent|null  $data
     *
     * @return mixed
     *
     * @see $this->with()
     */
    public function row($data = null);

    /**
     * Create a new Fieldset instance.
     *
     * @param  string  $name
     * @param  \Closure|null  $callback
     *
     * @return \Orchestra\Contracts\Html\Form\Fieldset
     */
    public function fieldset($name, Closure $callback = null);

    /**
     * Add hidden field.
     *
     * @param  string  $name
     * @param  \Closure|null  $callback
     *
     * @return void
     */
    public function hidden($name, $callback = null);

    /**
     * Setup form configuration.
     *
     * @param  \Orchestra\Contracts\Html\Form\Presenter  $listener
     * @param  string  $url
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  array  $attributes
     *
     * @return $this
     */
    public function resource(Presenter $listener, $url, Model $model, array $attributes = []);

    /**
     * Setup simple form configuration.
     *
     * @param  \Orchestra\Contracts\Html\Form\Presenter  $listener
     * @param  string  $url
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  array  $attributes
     *
     * @return $this
     */
    public function setup(Presenter $listener, $url, $model, array $attributes = []);
}
