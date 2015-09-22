<?php namespace Orchestra\Contracts\Html\Table;

use Orchestra\Contracts\Html\Grid as GridContract;

interface Grid extends GridContract
{
    /**
     * Attach Eloquent as row and allow pagination (if required).
     *
     * <code>
     *      // add model without pagination
     *      $table->with(User::all(), false);
     *
     *      // add model with pagination
     *      $table->with(User::paginate(30), true);
     * </code>
     *
     * @param  mixed  $model
     * @param  bool   $paginate
     *
     * @return $this
     *
     * @throws \InvalidArgumentException
     */
    public function with($model, $paginate = true);

    /**
     * Attach rows data instead of assigning a model.
     *
     * <code>
     *      // assign a data
     *      $table->rows(DB::table('users')->get());
     * </code>
     *
     * @param  array|null  $data
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public function rows(array $data = null);

    /**
     * Append a new column to the table.
     *
     * <code>
     *      // add a new column using just field name
     *      $table->column('username');
     *
     *      // add a new column using a label (header title) and field name
     *      $table->column('User Name', 'username');
     *
     *      // add a new column by using a field name and closure
     *      $table->column('fullname', function ($column)
     *      {
     *          $column->label = 'User Name';
     *          $column->value = function ($row) {
     *              return $row->first_name.' '.$row->last_name;
     *          };
     *
     *          $column->attributes(function ($row) {
     *              return array('data-id' => $row->id);
     *          });
     *      });
     * </code>
     *
     * @param  mixed  $name
     * @param  mixed|null  $callback
     *
     * @return \Orchestra\Contracts\Html\Table\Column
     */
    public function column($name, $callback = null);

    /**
     * Setup pagination.
     *
     * @param  int|null  $perPage
     *
     * @return $this
     */
    public function paginate($perPage);

    /**
     * Get whether current setup is paginated.
     *
     * @return bool
     */
    public function paginated();

    /**
     * Execute searchable filter on model instance.
     *
     * @param  array   $attributes
     * @param  string  $key
     *
     * @return void
     */
    public function searchable(array $attributes, $key = 'q');

    /**
     * Execute sortable query filter on model instance.
     *
     * @param  array   $orderColumns
     * @param  string  $orderByKey
     * @param  string  $directionKey
     *
     * @return void
     */
    public function sortable($orderColumns = [], $orderByKey = 'order_by', $directionKey = 'direction');
}
