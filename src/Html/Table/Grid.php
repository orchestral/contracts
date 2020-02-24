<?php

namespace Orchestra\Contracts\Html\Table;

use Closure;
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
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function with($model, bool $paginate = true);

    /**
     * Attach rows data instead of assigning a model.
     *
     * <code>
     *      // assign a data
     *      $table->rows(DB::table('users')->get());
     * </code>
     *
     * @param  array|\Illuminate\Contracts\Support\Arrayable  $data
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function rows($data);

    /**
     * Get raw data.
     *
     * @throws \InvalidArgumentException
     */
    public function data(): array;

    /**
     * Add or append grid header attributes.
     *
     * @return \Closure|array|null
     */
    public function header(Closure $callback = null);

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
     */
    public function paginated(): bool;

    /**
     * Execute searchable filter on model instance.
     */
    public function searchable(array $columns, string $searchKey = 'q'): void;

    /**
     * Execute sortable query filter on model instance.
     */
    public function sortable(
        array $config = [],
        string $orderByKey = 'order_by',
        string $directionKey = 'direction'
    ): void;
}
